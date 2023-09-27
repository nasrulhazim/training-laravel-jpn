<?php

use App\Mail\DefaultMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

$subject = 'Training Laravel - '.date('Y-m-d');

$emails = [
    'nasrul@test.com',
    'test1@test.com',
];

foreach ($emails as $email) {
    $data = [
        'name' => Str::random(),
        'ic' => Str::random(12)
    ];

    Mail::to($email)->send(
        new DefaultMail($subject, $data)
    );
    
    echo "Email sent to $email" . PHP_EOL;
}
