<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-custom {
            background-color: #1e62eb;
        }
        .welcome-section {
            background: linear-gradient(135deg, #1e62eb 0%, #0d47a1 100%);
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(30, 98, 245, 0.2);
        }
        .menu-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }
        .icon-krs {
            background-color: rgba(30, 98, 235, 0.1);
            color: #1e62eb;
        }
        .icon-detail {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portal Mahasiswa</a>
        <div class="ms-auto">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-light btn-sm fw-semibold text-danger px-3 py-2 rounded-3">
                    <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="welcome-section d-flex align-items-center justify-content-between">
        <div>
            <h1 class="fw-bold mb-1">Selamat Datang, {{ Auth::user()->name }}!</h1>
            <p class="mb-0 opacity-75">Silakan pilih layanan akademik yang ingin Anda akses hari ini.</p>
        </div>
        <i class="fa-solid fa-graduation-cap fa-4x opacity-50 d-none d-md-block"></i>
    </div>

    <div class="row g-4 justify-content-center">
        
        <div class="col-md-5">
            <div class="card menu-card text-center p-4 bg-white h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <div class="icon-box icon-krs">
                            <i class="fa-solid fa-file-signature fa-2x"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Pilihan 1: KRS</h4>
                        <p class="text-muted mb-4">Ajukan Kartu Rencana Studi (KRS) baru atau pantau status persetujuan dari dosen wali Anda di sini.</p>
                    </div>
                    <a href="{{ route('krs.mahasiswa') }}" class="btn btn-primary w-100 py-2.5 rounded-3 fw-bold shadow-sm">
                        Masuk Pengajuan KRS
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card menu-card text-center p-4 bg-white h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <div class="icon-box icon-detail">
                            <i class="fa-solid fa-list-check fa-2x"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Pilihan 2: KRS Detail</h4>
                        <p class="text-muted mb-4">Lihat rincian mata kuliah spesifik, kelas, serta total SKS yang telah Anda daftarkan di semester ini.</p>
                    </div>
                    <a href="{{ route('krsdetail.mahasiswa') }}" class="btn btn-success w-100 py-2.5 rounded-3 fw-bold shadow-sm">
                        Masuk Detail KRS
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>