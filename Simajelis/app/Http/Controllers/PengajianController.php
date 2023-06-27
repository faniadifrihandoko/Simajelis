<?php

namespace App\Http\Controllers;

use App\Models\Pengajian;
use Illuminate\Http\Request;

class PengajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengajians = Pengajian::all();
    
        return view('pengajian.index', compact('pengajians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengajian.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'title' => 'required','description' => 'required','image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd') .  "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] =  $imageName;
        }

        Pengajian::create($input);

        return redirect('/pengajians')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajian $pengajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajian $pengajian)
    {
        //
        return view('pengajian.edit', compact('pengajian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajian $pengajian)
    {
        //
        $request->validate([
            'title' => 'required','description' => 'required','image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd') .  "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] =  $imageName;
        } else {
            unset($input['image']);
        }

        $pengajian->update($input);

        return redirect('/pengajians')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajian $pengajian)
    {
        //
        $pengajian->delete();
        return redirect('/pengajians')->with('message','Data Berhasil Dihapus');
    }
}