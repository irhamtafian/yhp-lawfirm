<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\Contact;

class AboutUsController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $aboutUsData1 = AboutUs::find(1);
        $aboutUsData2 = AboutUs::find(2);
        $aboutUsData3 = AboutUs::find(3);

        return view('frontend.pages.about-us', compact('aboutUsData1', 'aboutUsData2', 'aboutUsData3', 'contact'));
    }
}