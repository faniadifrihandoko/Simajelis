<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Slider;
use App\Models\Pengajian;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        $sliders = Slider::all();
        $galeris = Galeri::all();
        $pengajians = Pengajian::all();
        
        return view('home.index', compact(
            'sliders',
            'galeris',
            'pengajians',
        ));
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
        $galeris = Galeri::all();
        return view('home.galeri', compact('galeris'));
    }

    public function pengajian()
    {
        # code...
        $pengajians = Pengajian::all();
        return view('home.pengajian', compact('pengajians'));
    }

   
}