<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.resume.index');
    }

    public function lock()
    {
        return view('frontend.pages._lock.resume');
    }

    public function resumeKey(Request $request)
    {
        $password = $request->input('password');

        if ($password === 'lucreo') {
            $request->session()->put('resume_key', true);
            return redirect('resume');
        } else {
            return redirect('resume/lock')->with('error', 'Incorrect key, ask Irham if you want to go to the resume page');
        }
    }
}