<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('frontend.pages.portfolio.index');
    }

    public function lock()
    {
        return view('frontend.pages._lock.portfolio');
    }

    public function portfolioKey(Request $request)
    {
        $password = $request->input('password');

        if ($password === 'azruka') {
            $request->session()->put('portfolio_key', true);
            return redirect('portfolio');
        } else {
            return redirect('portfolio/lock')->with('error', 'Incorrect key, ask Irham if you want to go to the portfolio page');
        }
    }
}