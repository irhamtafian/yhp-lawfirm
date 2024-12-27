<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = strtolower($request->input('keyword'));

        // Artikel
        if (in_array($keyword, ['articles', 'article', 'artikel', 'artikels'])) {
            return redirect()->route('front.article');
        }
        
        // Kategori
        elseif (in_array($keyword, ['categories', 'category', 'categori', 'kategori', 'cat'])) {
            return redirect()->route('front.categories.index');
        }
        
        // Email
        elseif (in_array($keyword, ['mails', 'mail', 'email', 'emails', 'pesan'])) {
            return redirect()->route('front.contact.index');
        }
        
        // Dashboard / Home
        elseif (in_array($keyword, ['home', 'beranda'])) {
            return redirect()->route('front.home.index');
        }
        
        // Tentang Kami
        elseif (in_array($keyword, ['about-us', 'about us', 'about', 'tentang-kami', 'tentang kami', 'tentang'])) {
            return redirect()->route('front.about-us.index');
        }
        
        // Layanan
        elseif (in_array($keyword, ['services', 'layanan', 'service'])) {
            return redirect()->route('front.services.index');
        }
        
        // Mitra
        elseif (in_array($keyword, ['partners', 'partner', 'mitra', 'partnership'])) {
            return redirect()->route('front.partners.index');
        }
        
        // Klien Kami
        elseif (in_array($keyword, ['our-clients', 'our clients', 'our client', 'clients', 'client', 'klient', 'klien', 'clien', 'klien kami'])) {
            return redirect()->route('front.our-clients.index');
        }
        
        // Kontak
        elseif (in_array($keyword, ['contact', 'contacts', 'kontak', 'hubungi kami', 'hubungi'])) {
            return redirect()->route('front.contact.index');
        }
        
        // Jika tidak ditemukan
        else {
            return redirect()->back()->with('notFound', 'Keyword not found');
        }
    }
}