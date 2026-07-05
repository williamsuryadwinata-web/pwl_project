<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah KRS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .container-box{
            max-width:850px;
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
            color:#fff;
            border:none;
            padding:12px 28px;
            border-radius:10px;
            font-weight:600;
        }

        .btn-save:hover{
            background:#1d4ed8;
        }

        .btn-reset{
            padding:12px 28px;
            border-radius:10px;
            font-weight:600;
        }

    </style>

</head>

<body>

<div class="container-box">

<div class="card card-custom">

<div class="card-header">
Tambah Data KRS
</div>

<div class="card-body">

<form action="{{ route('krs.save') }}" method="POST">

@csrf

<div class="row">

<div class="col-md-6 mb-3">

<label>Kode Mahasiswa</label>

<input
type="number"
name="kode_mahasiswa"
class="form-control"
placeholder="Masukkan ID Mahasiswa"
required>

</div>

<div class="col-md-6 mb-3">

<label>Tahun Ajaran</label>

<input
type="text"
name="tahun_ajaran"
class="form-control"
placeholder="Contoh : 2025/2026"
required>

</div>

<div class="col-md-6 mb-3">

<label>Semester</label>

<select
name="semester"
class="form-select">

<option value="ganjil">Ganjil</option>
<option value="genap">Genap</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>Status</label>

<select
name="status"
class="form-select">

<option value="pending">Pending</option>
<option value="approved">Approved</option>
<option value="partial">Partial</option>
<option value="declined">Declined</option>

</select>

</div>

<div class="col-md-6 mb-4">

<label>Total SKS</label>

<input
type="number"
name="total_sks"
class="form-control"
placeholder="Masukkan Total SKS"
required>

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

<a
href="/krs"
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