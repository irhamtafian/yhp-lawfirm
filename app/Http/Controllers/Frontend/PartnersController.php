<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Contact;

class PartnersController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $partnerData1 = Partner::find(1);
        $partnerData2 = Partner::find(2);
        $partnerData3 = Partner::find(3);
        $partnerData4 = Partner::find(4);
        $partnerData5 = Partner::find(5);

        return view('frontend.pages.partners', compact('partnerData1', 'partnerData2', 'partnerData3', 'partnerData4', 'partnerData5', 'contact'));
    }
}