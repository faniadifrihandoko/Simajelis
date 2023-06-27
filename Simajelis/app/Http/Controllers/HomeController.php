<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        return view('home.index');
    }

    public function about()
    {
        # code...
        return view('home.about');
    }

    public function contact()
    {
        # code...
        return view('home.contact');
    }

    public function galeri()
    {
        # code...
        return view('home.galeri');
    }

    public function pengajian()
    {
        # code...
        return view('home.pengajian');
    }

    public function team()
    {
        # code...
        return view('home.team');
    }

    public function testimonials()
    {
        # code...
        return view('home.testimonials');
    }
}