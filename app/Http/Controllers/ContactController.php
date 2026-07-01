<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'nullable|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $contact = Contact::create($validated);

        try {
            \Mail::to(config('mail.from.address'))->send(new \App\Mail\ContactMail($contact));
        } catch (\Exception $e) {
            // silent
        }

        return redirect()->route('contact')->with('success', 'Thank you for contacting us. We will get back to you shortly!');
    }
}
