<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class AdminPartnersController extends Controller
{
    public function index()
    {
        $partner = Partner::all();
        return view('backend.modules.partners.index', compact('partner'));
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('backend.modules.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $request->validate([
            'name' => 'required|max:100',
            'position' => 'required|max:100',
            'description' => 'required|max:500',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);        


       // Memeriksa perubahan data
       $isChanged = false;
       if ($partner->name != $request->name || $partner->position != $request->position || $partner->description != $request->description || $request->hasFile('image')) {
           $isChanged = true;
       }
   
       // Proses update data jika terdapat perubahan
       if ($isChanged) {
           $partner->name = $request->name;
           $partner->position = $request->position;
           $partner->description = $request->description;
   
           if ($request->hasFile('image')) {
               if ($partner->image) {
                   Storage::delete($partner->image);
               }
               $imagePath = $request->file('image')->store('img/partners', 'public');
               $partner->image = $imagePath;
           }
   
           $partner->save();
           return redirect()->route('partners.index')->with('success', 'Partners information updated successfully');
       } else {
           // Redirect dengan pesan warning jika tidak ada perubahan
           return redirect()->route('partners.index')->with('warning', 'No changes were made to the partners information');
       }
    }
}