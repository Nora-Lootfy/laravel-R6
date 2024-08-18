<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactForm() {
        return view('contact-us');
    }

    public function sendEmail(Request $request) {
        $data = $request->except('_token');

        Mail::to('test@example.com')->send(new ContactMail($data));

        return "Message sent successfuly";
    }
}
