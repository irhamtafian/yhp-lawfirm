<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mail;

class AdminMailsController extends Controller
{
    public function index()
    {
        $mails = Mail::latest()->get();
        return view('backend.modules.mails.index', compact('mails'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::create($validatedData);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function destroy($id)
    {
        $mail = Mail::findOrFail($id);
        $mail->delete();
         
        return redirect()->back()->with('success', 'Mail deleted successfully.');
    }
}