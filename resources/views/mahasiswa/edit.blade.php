<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Edit Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:#f5f7fb;
    font-family:'Segoe UI',sans-serif;
}

.page-title{
    font-size:42px;
    font-weight:700;
    color:#1f2937;
}

.sub-title{
    color:#64748b;
}

.card{
    border:none;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.form-label{
    font-weight:600;
    color:#334155;
}

.form-control{
    border-radius:12px;
    padding:12px 15px;
    border:1px solid #dbe4ee;
}

.form-control:focus{
    border-color:#3563e9;
    box-shadow:0 0 0 .2rem rgba(53,99,233,.15);
}

.header-icon{
    width:60px;
    height:60px;
    background:#eef4ff;
    color:#3563e9;
    border-radius:15px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:30px;
}

.btn-primary{
    background:#3563e9;
    border:none;
    border-radius:12px;
    padding:12px 28px;
}

.btn-primary:hover{
    background:#244fd5;
}

.btn-light{
    border-radius:12px;
    padding:12px 28px;
    border:1px solid #ddd;
}

</style>

</head>

<body>

<div class="container py-5">

<a href="{{ route('mahasiswa.index') }}" class="text-decoration-none">
<i class="bi bi-arrow-left"></i>
Kembali ke Data Mahasiswa
</a>

<div class="d-flex align-items-center mt-3 mb-4">

<div class="header-icon me-3">
<i class="bi bi-pencil-square"></i>
</div>

<div>

<div class="page-title">
Edit Mahasiswa
</div>

<div class="sub-title">
Perbarui informasi mahasiswa di bawah ini.
</div>

</div>

</div>

<div class="card">

<div class="card-body p-5">

<form action="{{ route('mahasiswa.edit',$mahasiswa->id) }}" method="POST">

@csrf
@method('PUT')

<input type="hidden" name="id" value="{{ $mahasiswa->id }}">

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-person me-2"></i>
Nama Lengkap
</label>
</div>

<div class="col-md-9">
<input
type="text"
class="form-control"
name="Fullname"
value="{{ $mahasiswa->Fullname }}">
</div>

</div>

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-credit-card me-2"></i>
Nomor Induk Mahasiswa
</label>
</div>

<div class="col-md-9">
<input
type="text"
class="form-control"
name="NIM"
value="{{ $mahasiswa->NIM }}">
</div>

</div>

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-person-vcard me-2"></i>
Nomor Induk Siswa Nasional
</label>
</div>

<div class="col-md-9">
<input
type="text"
class="form-control"
name="NISN"
value="{{ $mahasiswa->NISN }}">
</div>

</div>

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-geo-alt me-2"></i>
Tempat Lahir
</label>
</div>

<div class="col-md-9">
<input
type="text"
class="form-control"
name="Tempat_Lahir"
value="{{ $mahasiswa->Tempat_Lahir }}">
</div>

</div>

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-calendar-event me-2"></i>
Tanggal Lahir
</label>
</div>

<div class="col-md-9">
<input
type="date"
class="form-control"
name="Tanggal_Lahir"
value="{{ $mahasiswa->Tanggal_Lahir }}">
</div>

</div>

<div class="row mb-4">

<div class="col-md-3">
<label class="form-label">
<i class="bi bi-house me-2"></i>
Alamat
</label>
</div>

<div class="col-md-9">
<textarea
class="form-control"
rows="4"
name="Alamat">{{ $mahasiswa->Alamat }}</textarea>
</div>

</div>

<hr>

<button class="btn btn-primary">
<i class="bi bi-check-circle me-2"></i>
Update Data
</button>

<a href="{{ route('mahasiswa.index')}}" class="btn btn-light ms-2">
<i class="bi bi-x-circle me-2"></i>
Batal
</a>

</form>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>