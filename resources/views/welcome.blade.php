<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik ITBSS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Segoe UI',sans-serif;
    }

    html{
        scroll-behavior:smooth;
    }

    body{
        background:#f8fafc;
        overflow-x:hidden;
    }

    .navbar{
        background:white;
        box-shadow:0 5px 20px rgba(0,0,0,.08);
        padding:18px 0;
    }

    .navbar-brand{
        font-size:24px;
        font-weight:700;
        color:#2563eb!important;
    }

    .navbar-brand img{
        width:58px;
        margin-right:10px;
        border-radius:12px;
    }

    .nav-link{
        color:#334155!important;
        font-weight:600;
        margin-left:18px;
        transition:.3s;
    }

    .nav-link:hover{
        color:#2563eb!important;
    }

    .btn-login{

        border-radius:12px;
        padding:10px 28px;
        font-weight:600;

    }

    .btn-register{

        background:#2563eb;
        color:white;
        border-radius:12px;
        padding:10px 28px;
        font-weight:600;

    }

    .btn-register:hover{

        background:#1d4ed8;
        color:white;

    }

    .hero{

        min-height:92vh;
        display:flex;
        align-items:center;
        background:linear-gradient(135deg,#f8fbff,#eef4ff);

    }

    .hero h1{

        font-size:58px;
        font-weight:800;
        color:#0f172a;
        line-height:1.2;

    }

    .hero p{

        margin-top:25px;
        color:#64748b;
        font-size:19px;
        line-height:1.9;

    }

    .hero-btn{

        margin-top:35px;

    }

    .hero-btn a{

        padding:14px 35px;
        border-radius:12px;
        font-weight:700;
        text-decoration:none;

    }

    .btn-blue{

        background:#2563eb;
        color:white;

    }

    .btn-blue:hover{

        background:#1d4ed8;
        color:white;

    }

    .btn-white{

        border:2px solid #2563eb;
        color:#2563eb;
        margin-left:15px;

    }

    .btn-white:hover{

        background:#2563eb;
        color:white;

    }

    .hero-image img{

        width:100%;
        border-radius:30px;
        box-shadow:0 25px 50px rgba(0,0,0,.18);

    }

    .section-title{

        font-size:42px;
        font-weight:800;
        color:#0f172a;
        margin-bottom:18px;

    }

    .section-sub{

        color:#64748b;
        font-size:18px;

    }

    .feature{

        padding:110px 0;

    }

    .feature-card{

        background:white;
        border:none;
        border-radius:22px;
        padding:40px 30px;
        text-align:center;
        transition:.35s;
        box-shadow:0 10px 35px rgba(0,0,0,.05);
        height:100%;

    }

    .feature-card:hover{

        transform:translateY(-12px);

    }

    .feature-card i{

        font-size:55px;
        color:#2563eb;
        margin-bottom:25px;

    }

    .feature-card h4{

        font-weight:700;
        margin-bottom:15px;

    }

    .feature-card p{

        color:#64748b;

    }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand d-flex align-items-center" href="/">

<img src="{{ asset('images/ITB-SS.jpg') }}">

SIAKAD ITBSS

</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto me-4">

<li class="nav-item">

<a class="nav-link" href="#">Beranda</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#fitur">Fitur</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#tentang">Tentang</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#galeri">Galeri</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#kontak">Kontak</a>

</li>

</ul>

<a href="{{ route('login') }}" class="btn btn-outline-primary btn-login me-2">

Login

</a>

<a href="{{ route('register.view') }}" class="btn btn-register">

Register

</a>

</div>

</div>

</nav>

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>

Sistem Informasi Akademik

Institut Teknologi dan Bisnis Sabda Setia

</h1>

<p>

Platform digital yang membantu mahasiswa,
dosen dan administrator dalam mengelola
seluruh aktivitas akademik secara mudah,
cepat, aman dan terintegrasi.

</p>

<div class="hero-btn">

<a href="{{ route('login') }}" class="btn-blue">

Masuk Sekarang

</a>

<a href="{{ route('register.view') }}" class="btn-white">

Daftar Akun

</a>

</div>

</div>

<div class="col-lg-6 hero-image">

<img src="{{ asset('images/Gedung-ITBSS-scaled.jpg') }}">

</div>

</div>

</div>

</section>
<!-- ===========================
FITUR
=========================== -->

<section class="feature" id="fitur">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">
Fitur Unggulan
</h2>

<p class="section-sub">
Semua kebutuhan akademik berada dalam satu sistem yang mudah digunakan.
</p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="feature-card">

<i class="fa-solid fa-user-graduate"></i>

<h4>Mahasiswa</h4>

<p>
Mengelola data mahasiswa secara cepat, aman dan terintegrasi.
</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="feature-card">

<i class="fa-solid fa-chalkboard-user"></i>

<h4>Dosen</h4>

<p>
Menyimpan data dosen serta informasi akademik dengan rapi.
</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="feature-card">

<i class="fa-solid fa-book-open"></i>

<h4>Mata Kuliah</h4>

<p>
Pengelolaan mata kuliah, kelas dan kurikulum menjadi lebih mudah.
</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="feature-card">

<i class="fa-solid fa-file-signature"></i>

<h4>KRS Online</h4>

<p>
Mahasiswa dapat mengisi KRS dan memperoleh persetujuan dosen secara online.
</p>

</div>

</div>

</div>

</div>

</section>


<!-- ===========================
TENTANG
=========================== -->

<section id="tentang" style="padding:100px 0;background:white;">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<img src="{{ asset('images/Website-PMB-26-27.jpg') }}"
class="img-fluid rounded-4 shadow">

</div>

<div class="col-lg-6">

<h2 class="section-title">

Tentang Sistem Akademik

</h2>

<p class="section-sub" style="line-height:2">

Sistem Informasi Akademik ITBSS dirancang untuk membantu
pengelolaan seluruh aktivitas akademik secara digital,
mulai dari data mahasiswa, dosen, jurusan, mata kuliah,
kelas, hingga pengisian dan persetujuan KRS.

</p>

<div class="row mt-5">

<div class="col-6 mb-4">

<h5 class="fw-bold">

<i class="fa-solid fa-shield-halved text-primary"></i>

Aman

</h5>

<p class="text-muted">

Data tersimpan dengan aman menggunakan autentikasi pengguna.

</p>

</div>

<div class="col-6 mb-4">

<h5 class="fw-bold">

<i class="fa-solid fa-bolt text-primary"></i>

Cepat

</h5>

<p class="text-muted">

Semua proses dapat dilakukan hanya dalam beberapa klik.

</p>

</div>

<div class="col-6">

<h5 class="fw-bold">

<i class="fa-solid fa-mobile-screen text-primary"></i>

Responsive

</h5>

<p class="text-muted">

Nyaman digunakan melalui laptop maupun smartphone.

</p>

</div>

<div class="col-6">

<h5 class="fw-bold">

<i class="fa-solid fa-users text-primary"></i>

Terintegrasi

</h5>

<p class="text-muted">

Semua data akademik berada dalam satu sistem.

</p>

</div>

</div>

</div>

</div>

</div>

</section>
<!-- ===========================
GALLERY
=========================== -->

<section id="galeri" style="padding:100px 0; background:#f8fafc;">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">

Galeri Kampus

</h2>

<p class="section-sub">

Lingkungan belajar yang nyaman, modern dan mendukung kegiatan akademik.

</p>

</div>

<div class="row g-4">

<div class="col-lg-4">

<img src="{{ asset('images/Gedung-ITBSS-scaled.jpg') }}"
class="img-fluid rounded-4 shadow-lg w-100"
style="height:270px;object-fit:cover;">

</div>

<div class="col-lg-4">

<img src="{{ asset('images/Website-PMB-26-27.jpg') }}"
class="img-fluid rounded-4 shadow-lg w-100"
style="height:270px;object-fit:cover;">

</div>

<div class="col-lg-4">

<img src="{{ asset('images/Gedung-ITBSS-scaled.jpg') }}"
class="img-fluid rounded-4 shadow-lg w-100"
style="height:270px;object-fit:cover;">

</div>

</div>

</div>

</section>



<!-- ===========================
LOKASI
=========================== -->

<section style="padding:100px 0;background:white;">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h2 class="section-title">

Lokasi Kampus

</h2>

<p class="section-sub">

Institut Teknologi dan Bisnis Sabda Setia berlokasi di Pontianak,
Kalimantan Barat.

</p>

<div class="mt-4">

<p>

<i class="fa-solid fa-location-dot text-primary"></i>

Jl. Purnama II,
Pontianak Selatan,
Kalimantan Barat.

</p>

<p>

<i class="fa-solid fa-envelope text-primary"></i>

info@itbss.ac.id

</p>

<p>

<i class="fa-solid fa-phone text-primary"></i>

(+62) xxxx xxxx

</p>

</div>

</div>

<div class="col-lg-6">

<iframe

src="https://www.google.com/maps?q=ITBSS+Pontianak&output=embed"

width="100%"

height="350"

style="border:0;border-radius:20px;"

allowfullscreen

loading="lazy">

</iframe>

</div>

</div>

</div>

</section>



<!-- ===========================
CTA
=========================== -->

<section style="padding:90px 0;background:#2563eb;">

<div class="container text-center text-white">

<h2 class="fw-bold display-5">

Siap Menggunakan Sistem Akademik?

</h2>

<p class="mt-3 fs-5">

Masuk menggunakan akun Anda atau buat akun baru
untuk mengakses seluruh layanan akademik.

</p>

<div class="mt-5">

<a href="{{ route('login') }}"
class="btn btn-light btn-lg px-5 me-3">

Login

</a>

<a href="{{ route('register.view') }}"
class="btn btn-outline-light btn-lg px-5">

Register

</a>

</div>

</div>

</section>



<!-- ===========================
FOOTER
=========================== -->

<footer id="kontak"
style="background:#0f172a;padding:70px 0;">

<div class="container">

<div class="row">

<div class="col-lg-4">

<img src="{{ asset('images/ITB-SS.jpg') }}"
width="80"
class="rounded mb-3">

<h4 class="text-white fw-bold">

Institut Teknologi dan Bisnis Sabda Setia

</h4>

<p style="color:#cbd5e1;line-height:1.8;">

Sistem Informasi Akademik berbasis Laravel
untuk mendukung pengelolaan data akademik
secara modern, cepat dan terintegrasi.

</p>

</div>

<div class="col-lg-4">

<h5 class="text-white mb-4">

Menu

</h5>

<p><a href="#" class="text-decoration-none text-light">Beranda</a></p>

<p><a href="#fitur" class="text-decoration-none text-light">Fitur</a></p>

<p><a href="#tentang" class="text-decoration-none text-light">Tentang</a></p>

<p><a href="#galeri" class="text-decoration-none text-light">Galeri</a></p>

</div>

<div class="col-lg-4">

<h5 class="text-white mb-4">

Kontak

</h5>

<p style="color:#cbd5e1;">

📍 Jl. Purnama II,
Pontianak Selatan

</p>

<p style="color:#cbd5e1;">

✉ info@itbss.ac.id

</p>

<p style="color:#cbd5e1;">

☎ (+62) xxxx xxxx

</p>

</div>

</div>

<hr class="border-secondary my-5">

<div class="text-center text-secondary">

© 2026 Institut Teknologi dan Bisnis Sabda Setia

</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>