<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Contact;

class ServicesController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $serviceData1 = Service::find(1);
        $serviceData2 = Service::find(2);
        $serviceData3 = Service::find(3);
        $serviceData4 = Service::find(4);
        $serviceData5 = Service::find(5);

        return view('frontend.pages.services', compact('serviceData1', 'serviceData2', 'serviceData3', 'serviceData4', 'serviceData5', 'contact'));
    }
}