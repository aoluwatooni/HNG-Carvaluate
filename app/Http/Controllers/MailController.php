<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendmail(Request $request) {


        $from_name = $request->name;

        $from_email = $request->email;

        $message = $request->message;

        Mail::to($from_email)
            ->send(new ContactMail);

        Mail::to('hngcarvaluate@gmail.com')
            ->send(new ContactMail);



    }

}
