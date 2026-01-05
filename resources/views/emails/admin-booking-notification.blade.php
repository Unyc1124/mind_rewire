<h2>New Booking Received</h2>

<p><strong>Name:</strong> {{ $billing->full_name }}</p>
<p><strong>Email:</strong> {{ $billing->email }}</p>
<p><strong>Phone:</strong> {{ $billing->phone_code }} {{ $billing->phone_number }}</p>

<p><strong>Therapy:</strong> {{ $billing->therapyCategory->therapy_name }}</p>
<p><strong>Mode:</strong> {{ $billing->bookedTimeSlots->therapy_mode }}</p>
<p><strong>Date:</strong> {{ $billing->bookedTimeSlots->booking_date }}</p>
<p><strong>Time:</strong> {{ $billing->bookedTimeSlots->booking_time }}</p>

<h4>Address</h4>
<p>
{{ $billing->address_line_1 }} <br>
{{ $billing->address_line_2 }} <br>
{{ $billing->city }}, {{ $billing->state }} <br>
{{ $billing->country }} - {{ $billing->zip_code }}
</p>

<p><strong>Brief:</strong> {{ $billing->brief }}</p>
