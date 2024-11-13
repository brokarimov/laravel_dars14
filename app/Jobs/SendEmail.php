<?php

namespace App\Jobs;

use App\Mail\SendMessages;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Mail;

class SendEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public  $email;
    public $data;
    public function __construct($email, $data)
    {
        $this->email=$email;
        $this->data=$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new SendMessages($this->data));
        
    }
}
