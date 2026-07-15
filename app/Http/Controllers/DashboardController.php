<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Matakuliah;
use App\Models\Kelas;
use App\Models\Krs;
use App\Models\KrsDetail;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'mahasiswa') {

            return view('dashboard', [

                'totalKrs' => Krs::where(
                    'kode_mahasiswa',
                    auth()->user()->mahasiswa_id
                )->count(),

                'pendingKrs' => Krs::where(
                    'kode_mahasiswa',
                    auth()->user()->mahasiswa_id
                )->where('status', 'pending')->count(),

                'approvedKrs' => Krs::where(
                    'kode_mahasiswa',
                    auth()->user()->mahasiswa_id
                )->where('status', 'Approved')->count(),

                'declinedKrs' => Krs::where(
                    'kode_mahasiswa',
                    auth()->user()->mahasiswa_id
                )->where('status', 'Rejected')->count(),

            ]);
        }

        return view('dashboard', [
            'totalMahasiswa'  => Mahasiswa::count(),
            'totalDosen'      => Dosen::count(),
            'totalJurusan'    => Jurusan::count(),
            'totalMatakuliah' => Matakuliah::count(),
            'totalKelas'      => Kelas::count(),
            'totalKrs'        => Krs::count(),
            'totalKrsDetail'  => KrsDetail::count(),

            'pendingKrs'   => Krs::where('status', 'pending')->count(),
            'approvedKrs'  => Krs::where('status', 'approved')->count(),
            'declinedKrs'  => Krs::where('status', 'declined')->count(),

            'pendingDetail'  => KrsDetail::where('status', 'pending')->count(),
            'approvedDetail' => KrsDetail::where('status', 'approved')->count(),
            'declinedDetail' => KrsDetail::where('status', 'declined')->count(),
        ]);
    }
}