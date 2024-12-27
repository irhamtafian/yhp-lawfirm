<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = strtolower($request->input('keyword'));

        // Artikel
        if (in_array($keyword, ['articles', 'article', 'artikel', 'artikels'])) {
            return redirect()->route('articles.index');
        }
        
        // Kategori
        elseif (in_array($keyword, ['categories', 'category', 'categori', 'kategori', 'cat'])) {
            return redirect()->route('categories.index');
        }
        
        // Komentar
        elseif (in_array($keyword, ['comments', 'comment', 'komentar', 'komentars', 'komments', 'com'])) {
            return redirect()->route('comments.index');
        }
        
        // Email
        elseif (in_array($keyword, ['mails', 'mail', 'email', 'emails', 'pesan'])) {
            return redirect()->route('mails.index');
        }
        
        // Dashboard / Home
        elseif (in_array($keyword, ['home', 'beranda'])) {
            return redirect()->route('home.index');
        }
        
        // Tentang Kami
        elseif (in_array($keyword, ['about-us', 'about us', 'about', 'tentang-kami', 'tentang kami', 'tentang'])) {
            return redirect()->route('about-us.index');
        }
        
        // Layanan
        elseif (in_array($keyword, ['services', 'layanan', 'service'])) {
            return redirect()->route('services.index');
        }
        
        // Mitra
        elseif (in_array($keyword, ['partners', 'partner', 'mitra', 'partnership', 'rekan'])) {
            return redirect()->route('partners.index');
        }
        
        // Klien Kami
        elseif (in_array($keyword, ['our-clients', 'our clients', 'our client', 'clients', 'client', 'klient', 'klien', 'clien', 'klien kami'])) {
            return redirect()->route('our-clients.index');
        }
        
        // Kontak
        elseif (in_array($keyword, ['contact', 'contacts', 'kontak', 'hubungi kami', 'hubungi'])) {
            return redirect()->route('contact.index');
        }
        
        // Jika tidak ditemukan
        else {
            return redirect()->back()->with('notFound', 'Keyword not found');
        }
    }
}