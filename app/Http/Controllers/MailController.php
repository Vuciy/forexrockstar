<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(Request $request) {
        //dd($request->messege);
        $subject = $request->subject;
        $email = $request->email;
        $name = $request->name;
        Mail::send(
            ['text' => $request->messege],
            ['name' => $request->name],
            function($messege) {
                global $subject;
                global $email;
                global $name;

                $messege->to('forexrockstar01@gmail.com', 'To Forex Rockstar')->subject($subject);
                $messege->from($email, $name);
            } 
        );

       // return redirect('home');
    }
}
