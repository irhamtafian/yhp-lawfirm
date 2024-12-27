<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('frontend.pages.contact', compact('contact'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:20000',
        ]);

        Mail::create($validatedData);

        return redirect()->route('front.contact.index')->with('success', 'Your message has been sent successfully!');
    }
}