<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Akademik - ITBSS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
        }

        /* MODERN NAVBAR */
        .navbar {
            padding: 15px 0;
        }

        .nav-link {
            font-weight: 500;
            color: #4b5563 !important;
            transition: 0.2s;
        }

        .nav-link:hover, .nav-link.active {
            color: #2563eb !important;
        }

        /* BANNER HERO STYLE */
        .kampus-img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .05);
            transition: transform 0.3s ease;
        }

        .kampus-img:hover {
            transform: translateY(-5px);
        }

        /* CARD STYLE (Disamakan dengan Form & Login) */
        .card-custom {
            background: white;
            border: none;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .05);
        }

        .card-title-custom {
            font-size: 22px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 15px;
        }

        /* FOOTER */
        footer {
            background-color: #1f2937;
            color: white;
            margin-top: 80px;
            padding: 50px 0;
        }

        .footer-text {
            color: #9ca3af;
            font-size: 14px;
            margin-top: 15px;
        }

        .btn-custom-blue {
            background: #2563eb;
            color: white;
            border-radius: 8px;
            font-weight: 600;
            padding: 8px 16px;
            border: none;
        }

        .btn-custom-blue:hover {
            background: #1d4ed8;
            color: white;
        }
    </style>
</head>

<body>

@php
    use Illuminate\Support\Facades\Auth;
@endphp

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/ITB-SS.jpg') }}" width="60" class="me-2" style="border-radius: 8px;">
            <span class="fw-bold text-dark d-none d-sm-inline" style="font-size: 18px;">ITBSS ACADEMIC</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                @auth

                    @if(Auth::user()->role == 'admin')

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Menu Academic
                            </a>
                            <ul class="dropdown-menu shadow border-0 mt-2" style="border-radius: 10px;">
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\MahasiswaController::class, 'index']) }}">Data Mahasiswa</a></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\DosenController::class, 'index']) }}">Data Dosen</a></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\JurusanController::class, 'index']) }}">Data Jurusan</a></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\MatakuliahController::class, 'index']) }}">Mata Kuliah</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\KelasController::class, 'index']) }}">Kelas</a></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\KrsController::class, 'index']) }}">KRS</a></li>
                                <li><a class="dropdown-item py-2" href="{{ action([App\Http\Controllers\KrsDetailController::class, 'index']) }}">KRS Detail</a></li>
                            </ul>
                        </li>

                    @elseif(Auth::user()->role == 'dosen')

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                Menu Academic
                            </a>

                            <ul class="dropdown-menu shadow border-0 mt-2" style="border-radius:10px;">

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.mahasiswa') }}">
                                        Data Mahasiswa
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.dosen') }}">
                                        Data Dosen
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.jurusan') }}">
                                        Data Jurusan
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.matakuliah') }}">
                                        Mata Kuliah
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider"></li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.kelas') }}">
                                        Kelas
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.krs') }}">
                                        KRS
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen.krsdetail') }}">
                                        KRS Detail
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider"></li>

                                <li>
                                    <a class="dropdown-item text-primary fw-bold" href="{{ route('approval.index') }}">
                                        Approval KRS
                                    </a>
                                </li>

                            </ul>
                        </li>

                    @elseif(Auth::user()->role == 'mahasiswa')

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('krs.mahasiswa') }}">
                                Daftar KRS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('krsdetail.mahasiswa') }}">
                                Detail KRS
                            </a>
                        </li>

                    @endif

                @endauth

            </ul>

            <div class="d-flex align-items-center gap-3">
                @auth
                <div class="d-flex align-items-center border-start ps-3 gap-3">
                    <span class="fw-semibold text-secondary" style="font-size: 14px;">
                        Halo,
                        @if(Auth::user()->role == 'admin')
                            <span class="text-primary fw-bold">Admin</span>
                        @elseif(Auth::user()->role == 'dosen')
                            <span class="text-primary fw-bold">Dosen</span>
                        @elseif(Auth::user()->role == 'mahasiswa')
                            <span class="text-primary fw-bold">Mahasiswa</span>
                        @endif
                        👋
                    </span>
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" style="border-radius: 8px; font-weight: 600;">
                            Logout
                        </button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <div class="mb-4">
        <h1 class="fw-bold text-dark" style="font-size: 32px;">Dashboard Utama</h1>
        <p class="text-muted">Selamat datang di Sistem Informasi Akademik Institut Teknologi dan Bisnis Sabda Setia.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <img src="{{ asset('images/Website-PMB-26-27.jpg') }}" class="kampus-img" alt="Penerimaan Mahasiswa Baru">
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/Gedung-ITBSS-scaled.jpg') }}" class="kampus-img" alt="Gedung Kampus ITBSS">
        </div>
    </div>

    <div class="card-custom mt-5">
        <div class="card-title-custom">Campuses Location</div>
        <div class="d-flex align-items-start gap-2">
            <p class="m-0 text-secondary" style="font-size: 15px; line-height: 1.6;">
                <a href="https://maps.google.com/?q=Jl.+Purnama+2,+Kecamatan+Pontianak+Selatan,+Kota+Pontianak,+Kalimantan+Barat+78121" target="_blank" class="text-decoration-none fw-semibold text-primary">
                    📍 Jl. Purnama 2, Kecamatan Pontianak Selatan, Kota Pontianak, Kalimantan Barat 78121
                </a>
            </p>
        </div>
    </div>

</div>

<footer>
    <div class="container text-center">
        <img src="https://itbss.ac.id/wp-content/uploads/2021/12/Logo-White.png" width="200" class="mb-2" alt="ITBSS Logo White">
        <p class="footer-text">
            Copyright © 2026 Yayasan Gereja Protestan Kampung Bali. All Rights Reserved.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>