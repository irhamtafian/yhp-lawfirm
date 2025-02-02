<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MailController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); 
        return view('backend.modules.mail.index', ['contacts' => $contacts]);
    }
}