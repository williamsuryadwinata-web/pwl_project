@php
use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container-box {
            max-width: 1000px;
            margin: 50px auto;
        }
        .card-custom {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }
        .card-header-custom {
            background: #2563eb;
            color: white;
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-body {
            padding: 35px;
        }
        .btn-add {
            background: #ffffff;
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .btn-add:hover {
            background: #f0f4ff;
            color: #1d4ed8;
        }
    </style>
</head>
<body>

<div class="container-box">
    
    {{-- Notifikasi Sukses/Gagal jika ada --}}
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm mb-3">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger border-0 shadow-sm mb-3">
            {{ session('error') }}
        </div>
    @endif

    <div class="card card-custom">
        <div class="card-header-custom">
            <span>Daftar Pengajuan KRS</span>
            
            {{-- KONDISI TOMBOL SESUAI ROLE --}}
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('krs.add') }}" class="btn-add">
                    + Tambah KRS
                </a>
            @elseif(Auth::user()->role == 'mahasiswa')
                <a href="{{ route('krs.mahasiswa.create') }}" class="btn-add">
                    + Ajukan KRS
                </a>
            @endif
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Total SKS</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->tahun_ajaran }}</td>
                                <td class="text-capitalize">{{ $item->semester }}</td>
                                <td>{{ $item->total_sks }} SKS</td>
                                <td>
                                    @if($item->status == 'pending')
                                        <span class="badge bg-warning text-dark text-capitalize">{{ $item->status }}</span>
                                    @elseif($item->status == 'Approved' || $item->status == 'approved')
                                        <span class="badge bg-success text-capitalize">{{ $item->status }}</span>
                                    @else
                                        <span class="badge bg-danger text-capitalize">{{ $item->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                -- Mencegah rusaknya grid tabel jika kolom berjumlah 5 --
                                <td colspan="5" class="text-center text-muted py-4">Belum ada data KRS.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>