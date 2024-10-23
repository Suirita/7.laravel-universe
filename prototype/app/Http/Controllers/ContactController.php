<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('contact', $data, function ($message) use ($data) {
            $message->to('suirita.fahd.solicode@gmail.com', 'RECIPIENT')->subject('New contact message');
        });

        return redirect('/')->with('success', 'Your message has been sent successfully.');
    }
}
