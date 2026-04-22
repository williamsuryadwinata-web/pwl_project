<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $mahasiswa = \App\Models\Mahasiswa::all(); 
    return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan ke file resources/views/mahasiswa/create.blade.php
    return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');
        Mahasiswa::create($data);
        return redirect()->action([MahasiswaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Mencari data mahasiswa berdasarkan ID yang diklik
    $mahasiswa = \App\Models\Mahasiswa::find($id);
    
    // Mengirim data tersebut ke halaman edit
    return view('mahasiswa.edit', compact('mahasiswa'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
      Mahasiswa::find($id)->delete();
      return redirect()->action([MahasiswaController::class,'index']);
    }
}