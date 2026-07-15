<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;

class KrsController extends Controller
{
    public function index()
    {
        $data = Krs::all();

        return view('krs.index', compact('data'));
    }


    public function create()
    {
        $mahasiswa = Mahasiswa::all();

        return view('krs.create', compact('mahasiswa'));
    }


    public function mahasiswaCreate()
    {
        return view('krs.mahasiswa_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'kode_mahasiswa' => 'required',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'total_sks' => 'required|numeric'
        ]);

        Krs::create([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran'   => $request->tahun_ajaran,
            'semester'       => $request->semester,
            'status'         => 'pending',
            'total_sks'      => $request->total_sks
        ]);

        return redirect()->route('krs.index')
            ->with('success','KRS berhasil ditambahkan');
    }


    // SIMPAN KRS MAHASISWA
    public function mahasiswaStore(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'total_sks' => 'required|numeric',
        ]);


        Krs::create([
            // ambil id user yang sedang login
            'kode_mahasiswa' => Auth::id(),

            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester,
            'status' => 'pending',
            'total_sks' => $request->total_sks,
        ]);


        return redirect()->route('krs.mahasiswa')
            ->with('success', 'KRS berhasil diajukan.');
    }



    // HALAMAN APPROVAL DOSEN
    public function approval()
    {
        $data = Krs::all();

        return view('krs.approval', compact('data'));
    }



    // APPROVE
    public function approve($id)
    {
        $krs = Krs::findOrFail($id);

        $krs->status = 'approved';

        $krs->save();

        return redirect()->back()
            ->with('success', 'KRS berhasil di-approve.');
    }



    // REJECT
    public function reject($id)
    {
        $krs = Krs::findOrFail($id);

        $krs->status = 'declined';

        $krs->save();

        return redirect()->back()
            ->with('success', 'KRS berhasil di-reject.');
    }



    // HALAMAN KRS MAHASISWA
    public function mahasiswaIndex()
    {
        $data = Krs::where(
            'kode_mahasiswa',
            Auth::id()
        )->get();


        return view('krs.index', compact('data'));
    }
}