<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;

class KrsController extends Controller
{
    public function index()
    {
        $data = Krs::all();
        return view('krs.index', compact('data'));
    }

    public function create()
    {
        return view('krs.create');
    }

    public function store(Request $request)
    {
        Krs::create([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester,
            'status' => $request->status,
            'total_sks' => $request->total_sks
        ]);

        return redirect('/krs');
    }
}