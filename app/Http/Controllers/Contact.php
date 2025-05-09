<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function contact()
    {
        return view("contact");
    }

    public function ContactForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);


        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\nPhone: {$data['phone']}\nService: {$data['service']}\nMessage: {$data['message']}",
            function ($message) use ($data) {
                $message->to('jonathanodongtho02@gmail.com')
                        ->subject('NEW CLIENT MESSAGE');
            }
        );
        // Here you can handle the form submission, like sending an email or saving to the database

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
