<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurClient;
use App\Models\Contact;

class OurClientsController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $ourClientData1 = OurClient::find(1);
        $ourClientData2 = OurClient::find(2);
        $ourClientData3 = OurClient::find(3);

        return view('frontend.pages.our-clients', compact('ourClientData1', 'ourClientData2', 'ourClientData3', 'contact'));
    }
}