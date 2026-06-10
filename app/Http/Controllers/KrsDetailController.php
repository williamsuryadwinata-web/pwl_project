<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KrsDetail;

class KrsDetailController extends Controller
{
    public function index()
    {
        $data = KrsDetail::all();
        return view('krs_detail.index', compact('data'));
    }

    public function create()
    {
        return view('krs_detail.create');
    }

    public function store(Request $request)
    {
        KrsDetail::create([
            'kode_krs' => $request->kode_krs,
            'kode_kelas' => $request->kode_kelas,
            'status' => $request->status
        ]);

        return redirect('/krs-detail');
    }
}