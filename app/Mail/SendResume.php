<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendResume extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Test Email')
                    ->view('mails.send_resume')->attach($this->data['document']->getRealPath(),
                        [
                            'as'=>$this->data['document']->getClientOriginalName(),
                            'mime'=>$this->data['document']->getClientMimeType(),
                        ]);
    }
}
