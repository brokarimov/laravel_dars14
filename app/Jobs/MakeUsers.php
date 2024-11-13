<?php

namespace App\Jobs;

use App\Models\User;
use Hash;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class MakeUsers implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle(): void
    {
        $emailParts = explode('@', $this->data['email']);
        $username = $emailParts[0];
        $domain = $emailParts[1]; 

        for ($i = 0; $i < 1000; $i++) {
            $userData = [
                'name' => $this->data['name'] . $i,
                'email' => $username . $i . '@' . $domain,
                'password' => Hash::make($this->data['password']),
            ];

            User::create($userData);
        }
    }
}
