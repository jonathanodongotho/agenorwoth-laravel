<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class indexformController extends Controller
{
    public function formview()
    {
        return view('indexform');
    }

    public function formsubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:50',
        ]);



        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}",
            function ($message) use ($data) {
                $message->to('jonathanodongtho02@gmail.com')
                        ->subject('SUBSCRIBED CLIENT');
            }
        );


        // Process the data (e.g., save to database, send email, etc.)

        return redirect()->back()->with('success', 'Your subscription has been successfully received, thank you.');
    } 
}
