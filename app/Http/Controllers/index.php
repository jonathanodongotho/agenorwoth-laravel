<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function indexForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:25',
        ]);

        // Process the data (e.g., save to database, send email, etc.)

        return redirect()->back()->with('success', 'Your subscription has been successfully received, thank you.');
    }
}
