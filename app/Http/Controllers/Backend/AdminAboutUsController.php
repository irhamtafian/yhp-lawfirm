<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;

class AdminAboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('backend.modules.about-us.index', compact('aboutUs'));
    }

    public function edit($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('backend.modules.about-us.edit', compact('aboutUs'));
    }

    public function update(Request $request, $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:500',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);        

       // Memeriksa perubahan data
       $isChanged = false;
       if ($aboutUs->title != $request->title || $aboutUs->description != $request->description || $request->hasFile('image')) {
           $isChanged = true;
       }
   
       // Proses update data jika terdapat perubahan
       if ($isChanged) {
           $aboutUs->title = $request->title;
           $aboutUs->description = $request->description;
   
           if ($request->hasFile('image')) {
               if ($aboutUs->image) {
                   Storage::delete($aboutUs->image);
               }
               $imagePath = $request->file('image')->store('img/about-us', 'public');
               $aboutUs->image = $imagePath;
           }
   
           $aboutUs->save();
           return redirect()->route('about-us.index')->with('success', 'About us information updated successfully');
       } else {
           // Redirect dengan pesan warning jika tidak ada perubahan
           return redirect()->route('about-us.index')->with('warning', 'No changes were made to the about us information');
       }


    }
}