<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurClient;
use Illuminate\Support\Facades\Storage;

class AdminOurClientsController extends Controller
{
    public function index()
    {
        $ourClient = OurClient::all();
        return view('backend.modules.our-clients.index', compact('ourClient'));
    }

    public function edit($id)
    {
        $ourClient = OurClient::findOrFail($id);
        return view('backend.modules.our-clients.edit', compact('ourClient'));
    }

    public function update(Request $request, $id)
    {
        $ourClient = OurClient::findOrFail($id);
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:500',
        ]);        

        // Memeriksa perubahan data
        $isChanged = false;
        if ($ourClient->title != $request->title || $ourClient->description != $request->description) {
            $isChanged = true;
        }
    
        // Proses update data jika terdapat perubahan
        if ($isChanged) {
            $ourClient->title = $request->title;
            $ourClient->description = $request->description;
    
            $ourClient->save();
            return redirect()->route('our-clients.index')->with('success', 'Our clients information updated successfully');
        } else {
            // Redirect dengan pesan warning jika tidak ada perubahan
            return redirect()->route('our-clients.index')->with('warning', 'No changes were made to the our clients information');
        }
    }
}