<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
{
    $data = [
        'name'    => $request->name,
        'email'   => $request->email,
        'message' => $request->message,
    ];

    Mail::send('emails.contact', ['data' => $data], function ($m) use ($data) {
        $m->to('support@biggergrove.com')
          ->subject('New Contact Message');
    });

    return back()->with('success', 'Message sent!');
}

}
