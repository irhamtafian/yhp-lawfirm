<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class AdminServicesController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('backend.modules.services.index', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.modules.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:2000',
        ]);        

       // Memeriksa perubahan data
       $isChanged = false;
       if ($service->title != $request->title || $service->description != $request->description) {
           $isChanged = true;
       }
   
       // Proses update data jika terdapat perubahan
       if ($isChanged) {
           $service->title = $request->title;
           $service->description = $request->description;
   
           $service->save();
           return redirect()->route('services.index')->with('success', 'Services information updated successfully');
       } else {
           // Redirect dengan pesan warning jika tidak ada perubahan
           return redirect()->route('services.index')->with('warning', 'No changes were made to the services information');
       }
    }
}