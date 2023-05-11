<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function maildetails()
    {
        $details = [
            'title' => 'Laravel Mail System',
            'body'  => 'This is for testing email using smtp'
        ];
       
        Mail::to('atikmahmud.cse@gmail.com')->send(new \App\Mail\SendMail($details));
       
        dd("Email is Sent.");
    }
}
