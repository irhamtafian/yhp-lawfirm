<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first(); // Mengambil data kontak pertama dari database
        return view('backend.modules.contact.index', compact('contact')); // Mengirim data kontak ke view
    }

    public function update(Request $request)
    {
        $contact = Contact::first(); // Mengambil data kontak pertama dari database

        // Validasi data yang dikirim dari form
        $validatedData = $request->validate([
            'location' => 'required|max:500',
            'gmaps' => 'required|max:500',
            'email' => 'required|email|max:100',
            'phone' => 'required|max:100',
            'instagram' => 'required|max:100',
        ]);

         // Memeriksa perubahan data
         $isChanged = $contact->location != $request->location || 
                      $contact->gmaps != $request->gmaps || 
                      $contact->email != $request->email || 
                      $contact->phone != $request->phone || 
                      $contact->instagram != $request->instagram;

          // Proses update data jika terdapat perubahan
        if ($isChanged) {
            $contact->location = $request->location;
            $contact->gmaps = $request->gmaps;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->instagram = $request->instagram;
    
            $contact->update($validatedData);
            return redirect()->back()->with('success', 'Contact information updated successfully');
        } else {
            // Redirect dengan pesan warning jika tidak ada perubahan
            return redirect()->back()->with('warning', 'No changes were made to the contact information');
        }
    }

}