<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BrochureMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('Your Mind Rewire Internship Brochure')
            ->view('emails.brochure')
            ->attach(public_path('assets/images/coordinators/MindRewire_Psychology_Internship_Brochure_FINAL.pdf'), [
                'as'   => 'MindRewire_Internship_Brochure.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}