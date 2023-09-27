<?php

use App\Mail\DefaultMail;
use Illuminate\Support\Facades\Mail;

if(! function_exists('send_mail')) {
    function send_mail($to, $subject, $message) {
        Mail::to($to)->send(new DefaultMail($subject, $message));
    }
}


// send_email('nasrul@cc.com', 'tajuk', 'message')
