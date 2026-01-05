<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\State;
use Razorpay\Api\Api;
use App\Models\Billing;
use Illuminate\Http\Request;
use App\Models\BookedTimeSlot;
use App\Models\TherapyCategory;
use PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;
use Vinkla\Hashids\Facades\Hashids;
use App\Mail\AdminBookingNotificationMail;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{

    public function submitBooking(Request $request)
    {
        \Log::info('submit booking hit');
        $request->validate([
            'selected_date' => 'required',
            'selected_slot' => 'required',
            'therapy_type' => 'required',
            'full_name' => 'required|max:200',
            'email' => 'required|email',
            'address_line_1' => 'required',
            'address_line_2' => 'nullable',
            'land_mark' => 'nullable',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone_code' => 'required',
            'phone_number' => 'required',
            'brief' => 'required',
        ]);

        $plan_id = Hashids::decode($request->therapy_type)[0] ?? null; // 123

        if (!$plan_id) {
            return response()->json(['status' => 'error', 'message' => 'Therapy Details Not Found.']);
        }

        $plan_details = TherapyCategory::find($plan_id);

        if (!$plan_details) {
            return response()->json(['status' => 'error', 'message' => 'Therapy Details Not Found.']);
        }

        $amount = $plan_details->price * 100;

        $billings = Billing::create(
            [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'land_mark' => $request->land_mark,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'zip_code' => $request->zip_code,
                'phone_code' => $request->phone_code,
                'phone_number' => $request->phone_number,
                'brief' => $request->brief,

                'therapy_type' => $plan_details->id,
                'amount' => $amount
            ]
        );

        BookedTimeSlot::create(
            [
                'billing_id' => $billings->id,
                'booking_date' => $request->selected_date,
                'booking_time' => $request->selected_slot,
                'therapy_mode' => $request->therapy_mode,
            ]
        );

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $razorpayOrder = $api->order->create([
            'receipt' => 'billing_' . $billings->id,
            'amount' => $amount, // amount in paise
            'currency' => 'INR',
        ]);


        // Update billing with razorpay_order_id
        $billings->update(['razorpay_order_id' => $razorpayOrder['id']]);


        return response()->json([
            'status' => 'success',

            'order_id' => $razorpayOrder['id'],
            'billing_id' => $billings->id,
            'amount' => $amount,
            'key' => env('RAZORPAY_KEY'),
            'name' => $billings->full_name,
            'email' => $billings->email,
            'contact' => $billings->phone_code . ' ' . $billings->phone_number,
        ]);
    }

    public function getStateList(Request $request)
    {
        $state_list = State::where('country_id', $request->country_id)
            ->get();

        return response()->json(['type' => 'success', 'data' => $state_list]);
    }




    public function paymentSuccess(Request $request)
    {
        Log::info('paymentSuccess hit', $request->all());

        Log::alert($request);

        $billing = Billing::where('razorpay_order_id', $request->razorpay_order_id)->first();

        if ($billing) {
            $billing->update([
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'payment_status' => 'paid',
            ]);

            // ✅ SEND EMAIL HERE ALSO
        $this->sendConfirmationEmail($billing);
           
        // ✅ Admin notification (Laravel Mail)
Mail::to(env('ADMIN_ORDER_EMAIL'))
    ->send(new AdminBookingNotificationMail($billing));


        
        }

        return response()->json(['message' => 'Payment Successful']);
    }

        public function bookingSuccessPage(Billing $billing)
{
    $billing->load(['bookedTimeSlots', 'therapyCategory']);

    return view('mainsite.booking-success', compact('billing'));
}

    public function paymentFailed(Request $request)
    {
        $billing = Billing::where('razorpay_order_id', $request->order_id)->first();

        if ($billing) {
            $billing->update([
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'payment_status' => $request->payment_status,
            ]);

            BookedTimeSlot::where('billing_id', $billing->id)
                ->update(['status' => 1]);
        }

        return response()->json(['message' => 'Payment Failed']);
    }

    public function razorpayWebhook(Request $request)
    {
        $requestBody = $request->getContent();

        // Webhook verification success
        $event = json_decode($requestBody, true);

        Log::info($event);

        switch ($event['event']) {
            case 'payment.failed':

                $billing = Billing::where('razorpay_order_id', $event['payload']['payment']['entity']['order_id'])->first();

                $billing->update([
                    'razorpay_payment_id' => $event['payload']['payment']['entity']['id'],
                    'payment_status' => 'failed',
                    'payload' => json_encode($event),
                ]);
                break;

            case 'payment.captured':

                $billing = Billing::where('razorpay_order_id', $event['payload']['payment']['entity']['order_id'])->first();

                $billing->update([
                    'razorpay_payment_id' => $event['payload']['payment']['entity']['id'],
                    'payment_status' => 'paid',
                    'payload' => json_encode($event),
                ]);

                BookedTimeSlot::where('billing_id', $billing->id)
                    ->update(['status' => 1]);

                $this->sendConfirmationEmail($billing);
                break;

            default:
                Log::info('Unhandled event: ' . $event['event']);
        }
    }


    public function sendConfirmationEmail($billing_details)
    {
        $therapy_type = $billing_details->therapyCategory->therapy_name ?? 'Therapy';

        $subject = 'Your ' . $therapy_type . ' Appointment Confirmation: Mind Rewire';

        $email_body = '<p data-start="145" data-end="157">Hi {name},</p>
        <p data-start="159" data-end="244">Your {therapy_type} session with <strong data-start="192" data-end="209">Sumedha Singh</strong> has been successfully confirmed.</p>
        <p data-start="246" data-end="272"><strong data-start="246" data-end="270">Appointment Details:</strong></p>
        <ul data-start="273" data-end="405">
        <li data-start="273" data-end="324">
        <p data-start="275" data-end="324"><strong data-start="275" data-end="284">Mode:</strong>{mode}</p>
        </li>
        <li data-start="325" data-end="405">
        <p data-start="327" data-end="405"><strong data-start="327" data-end="356">{link_or_address}:</strong>{link_url_or_address}</p>
        </li>
        <li data-start="325" data-end="405"><strong>Date &amp; Time:&nbsp;</strong> {date_and_time}</li>
        </ul>
        <p data-start="407" data-end="586">Please ensure you are available at the scheduled time. For video or phone sessions, kindly check your internet connection and device settings beforehand for a smooth experience.</p>
        <p data-start="588" data-end="620">We look forward to seeing you!</p>
        <p data-start="622" data-end="667">Best regards,<br data-start="635" data-end="638" />Mind Re-wire</p>';

        $email_body = $this->replaceCommonVariable($billing_details, $therapy_type, $email_body);

        $this->sendEmail($billing_details->email, $billing_details->full_name, $subject, $email_body);



        $admin_subject = 'New ' . $therapy_type . ' Appointment Confirmed with ' . $billing_details->full_name;

        $admin_email_body = '<p data-start="158" data-end="176">Hi,</p>
        <p data-start="178" data-end="268">A new {therapy_type} appointment has been successfully confirmed with <strong data-start="248" data-end="265">Sumedha Singh</strong>.</p>
        <p data-start="270" data-end="296"><strong data-start="270" data-end="294">Appointment Details:</strong></p>
        <ul data-start="297" data-end="502">
        <li data-start="297" data-end="324">
        <p data-start="299" data-end="324"><strong data-start="299" data-end="315">Client Name:</strong> {name}</p>
        </li>
        <li data-start="325" data-end="376">
        <p data-start="327" data-end="376"><strong data-start="327" data-end="336">Mode:</strong>{mode}</p>
        </li>
        <li data-start="377" data-end="421">
        <p data-start="379" data-end="421"><strong data-start="379" data-end="395">Date &amp; Time:</strong> {date_and_time}</p>
        </li>
        <li data-start="422" data-end="502">
        <p data-start="424" data-end="502"><strong data-start="424" data-end="453">{link_or_address}:</strong> {link_url_or_address}</p>
        </li>
        </ul>
        <p data-start="504" data-end="577">Please ensure all necessary arrangements are in place for this session.</p>
        <p data-start="579" data-end="624">Best regards,<br data-start="592" data-end="595" />Mind Rewire</p>';

        $admin_email_body = $this->replaceCommonVariable($billing_details, $therapy_type, $admin_email_body);

       $this->sendEmail(
    config('mail.ADMIN_ORDER_EMAIL'),
    'Mind Rewire',
    $admin_subject,
    $admin_email_body
);

        // $this->sendEmail('admin@mind-rewire.com', 'Mind Rewire', $admin_subject, $admin_email_body);
    }


    public function  replaceCommonVariable($billing_details, $therapy_type, $email_body)
    {
        $email_body = str_replace('{name}', $billing_details->full_name, $email_body);

        $email_body = str_replace('{therapy_type}', $therapy_type, $email_body);
        $email_body = str_replace('{mode}', $billing_details->bookedTimeSlots->therapy_mode_for_user, $email_body);
        $email_body = str_replace('{date_and_time}', $billing_details->bookedTimeSlots->booking_date_for_user . ' ' . $billing_details->bookedTimeSlots->booking_time, $email_body);

        if ($billing_details->bookedTimeSlots->therapy_mode == 'video-call') {
            $email_body = str_replace('{link_or_address}', 'Link', $email_body);
            $email_body = str_replace('{link_url_or_address}', 'https://meet.google.com/bso-gwoy-iui', $email_body);
        } elseif ($billing_details->bookedTimeSlots->therapy_mode == 'in-person') {
            $email_body = str_replace('{link_or_address}', 'Address', $email_body);
            $email_body = str_replace('{link_url_or_address}', 'Mind Rewire, Park Street, Wakad, Pune, Maharashtra, India - 411057', $email_body);
        } else {
            $email_body = str_replace('{link_or_address}', 'Phone Number', $email_body);
            $email_body = str_replace('{link_url_or_address}', '+91 77580 23819', $email_body);
        }

        return $email_body;
    }


    public function testEmail()
    {
        $billing_details = Billing::find(2);

        $this->sendConfirmationEmail($billing_details);
    }


    // public function sendEmail($email, $name, $subject, $email_body)
    // {

    //     $mail = new PHPMailer\PHPMailer(true);

    //     try {
    //         $mail->isMail(); // Use PHP's mail() instead of SMTP

    //         // Sender & recipient
    //         $mail->setFrom('Info@mind-rewire.com ', 'Mind Rewire');
    //         $mail->addAddress($email, $name);

    //         // Content
    //         $mail->isHTML(true);
    //         $mail->Subject = $subject;
    //         $mail->Body    = $email_body;
    //         // $mail->AltBody = 'This is a test email using GoDaddy shared hosting.';

    //         $mail->send();

    //         echo 'Email sent successfully!';
    //     } catch (Exception $e) {
    //         echo "Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}";
    //     }
    // }

    public function sendEmail($email, $name, $subject, $email_body)
{
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP CONFIG
        $mail->isSMTP();
        $mail->Host       = env('MAIL_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = env('MAIL_USERNAME');
        $mail->Password   = env('MAIL_PASSWORD');
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->Port       = env('MAIL_PORT');

        // Sender
        $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $email_body;

        $mail->send();

        \Log::info('Email sent successfully to ' . $email);

    } catch (\Exception $e) {
        \Log::error('Email failed: ' . $mail->ErrorInfo);
    }
}

}
