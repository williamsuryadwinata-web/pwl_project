<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .container-box{
            max-width:900px;
            margin:50px auto;
        }

        .card-custom{
            background:#fff;
            border:none;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            overflow:hidden;
        }

        .card-header{
            background:#2563eb;
            color:#fff;
            padding:20px;
            font-size:28px;
            font-weight:700;
        }

        .card-body{
            padding:35px;
        }

        label{
            font-weight:600;
            margin-bottom:8px;
            color:#374151;
        }

        .form-control,
        .form-select{
            height:48px;
            border-radius:10px;
        }

        .btn-save{
            background:#2563eb;
            color:white;
            border:none;
            padding:12px 30px;
            border-radius:10px;
            font-weight:600;
        }

        .btn-save:hover{
            background:#1d4ed8;
        }

        .btn-reset{
            padding:12px 30px;
            border-radius:10px;
            font-weight:600;
        }

    </style>

</head>

<body>

<div class="container-box">

<div class="card card-custom">

<div class="card-header">
Tambah Kelas
</div>

<div class="card-body">

<form action="/kelas/store" method="POST">

@csrf

<div class="row">

<div class="col-md-6 mb-3">
<label>Kode Kelas</label>
<input type="text"
class="form-control"
name="kode_kelas"
placeholder="Contoh : TI-4A">
</div>

<div class="col-md-6 mb-3">
<label>Ruang Kelas</label>
<input type="text"
class="form-control"
name="ruang_kelas"
placeholder="Contoh : Lab 3">
</div>

<div class="col-md-6 mb-3">

<label>Mata Kuliah</label>

<select
name="kode_mata_kuliah"
class="form-select">

<option value="">-- Pilih Mata Kuliah --</option>

@foreach($matakuliah as $m)

<option value="{{ $m->id }}">
{{ $m->NamaMK }}
</option>

@endforeach

</select>

</div>

<div class="col-md-6 mb-3">

<label>Dosen</label>

<select
name="kode_dosen"
class="form-select">

<option value="">-- Pilih Dosen --</option>

@foreach($dosen as $d)

<option value="{{ $d->id }}">
{{ $d->Fullname }}
</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Hari</label>

<select
name="hari"
class="form-select">

<option value="senin">Senin</option>
<option value="selasa">Selasa</option>
<option value="rabu">Rabu</option>
<option value="kamis">Kamis</option>
<option value="jumat">Jumat</option>

</select>

</div>

<div class="col-md-4 mb-3">

<label>Jam</label>

<select
name="jam"
class="form-select">

<option>08:00 - 09:40</option>
<option>09:50 - 11:30</option>
<option>12:30 - 14:10</option>
<option>17:00 - 18:40</option>
<option>19:00 - 20:40</option>

</select>

</div>

<div class="col-md-4 mb-3">
<label>Tahun Ajaran</label>
<input type="text"
class="form-control"
name="tahun_ajaran"
placeholder="2025/2026">
</div>

<div class="col-md-6 mb-4">
<label>Jumlah Maksimal Mahasiswa</label>
<input type="number"
class="form-control"
name="jumlah_max">
</div>

<div class="col-md-6 mb-4">

<label>Semester</label>

<div class="mt-2">

<div class="form-check form-check-inline">

<input class="form-check-input"
type="radio"
name="semester"
value="ganjil">

<label class="form-check-label">
Ganjil
</label>

</div>

<div class="form-check form-check-inline">

<input class="form-check-input"
type="radio"
name="semester"
value="genap">

<label class="form-check-label">
Genap
</label>

</div>

</div>

</div>

</div>

<button
type="submit"
class="btn btn-save">

Simpan Data

</button>

<input
type="reset"
value="Reset"
class="btn btn-secondary btn-reset">

<a href="/kelas"
class="btn btn-outline-dark btn-reset">

Kembali

</a>

</form>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>