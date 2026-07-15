<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KrsDetail;
use App\Models\Krs;
use App\Models\Kelas;

class KrsDetailController extends Controller
{
    public function index()
    {
        $data = KrsDetail::all();
        return view('krs_detail.index', compact('data'));
    }

    public function create()
    {
        $krs = Krs::all();
        $kelas = Kelas::all();

        return view('krs_detail.create', compact('krs', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_krs'   => 'required',
            'kode_kelas' => 'required'
        ]);

        KrsDetail::create([
            'kode_krs'   => $request->kode_krs,
            'kode_kelas' => $request->kode_kelas,
            'status'     => 'pending'
        ]);

        return redirect('/krs-detail')
                ->with('success', 'Data KRS Detail berhasil ditambahkan.');
    }
}