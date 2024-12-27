<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        return view('backend.modules.home.index', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('backend.modules.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id);
    
        // Validasi input
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:500',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Memeriksa perubahan data
        $isChanged = false;
        if ($home->title != $request->title || $home->description != $request->description || $request->hasFile('image')) {
            $isChanged = true;
        }
    
        // Proses update data jika terdapat perubahan
        if ($isChanged) {
            $home->title = $request->title;
            $home->description = $request->description;
    
            if ($request->hasFile('image')) {
                if ($home->image) {
                    Storage::delete($home->image);
                }
                $imagePath = $request->file('image')->store('img/home', 'public');
                $home->image = $imagePath;
            }
    
            $home->save();
            return redirect()->route('home.index')->with('success', 'Home information updated successfully');
        } else {
            // Redirect dengan pesan warning jika tidak ada perubahan
            return redirect()->route('home.index')->with('warning', 'No changes were made to the home information');
        }
    }
    

}