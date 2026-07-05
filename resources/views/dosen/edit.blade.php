<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>

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
            border:none;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .card-header{
            background:#2563eb;
            color:white;
            font-size:28px;
            font-weight:bold;
            padding:20px;
        }

        .card-body{
            padding:35px;
        }

        label{
            font-weight:600;
            color:#374151;
            margin-bottom:8px;
        }

        .form-control{
            height:48px;
            border-radius:10px;
        }

        textarea.form-control{
            height:120px;
        }

        .btn-update{
            background:#2563eb;
            color:white;
            border:none;
            padding:12px 30px;
            border-radius:10px;
            font-weight:600;
        }

        .btn-update:hover{
            background:#1d4ed8;
        }

        .btn-reset{
            border-radius:10px;
            padding:12px 30px;
            font-weight:600;
        }

    </style>

</head>

<body>

<div class="container-box">

<div class="card card-custom">

<div class="card-header">
Edit Data Dosen
</div>

<div class="card-body">

<form action="{{ route('dosen.edit',$dosen->id) }}" method="POST">

@csrf
@method('PUT')

<input type="hidden" name="id" value="{{ $dosen->id }}">

<div class="row">

<div class="col-md-6 mb-3">
<label>Nama Lengkap</label>
<input
type="text"
name="Fullname"
class="form-control"
value="{{ $dosen->Fullname }}">
</div>

<div class="col-md-6 mb-3">
<label>Nomor Dosen</label>
<input
type="text"
name="ND"
class="form-control"
value="{{ $dosen->ND }}">
</div>

<div class="col-md-6 mb-3">
<label>Tempat Lahir</label>
<input
type="text"
name="Tempat_Lahir"
class="form-control"
value="{{ $dosen->Tempat_Lahir }}">
</div>

<div class="col-md-6 mb-3">
<label>Tanggal Lahir</label>
<input
type="date"
name="Tanggal_Lahir"
class="form-control"
value="{{ $dosen->Tanggal_Lahir }}">
</div>

<div class="col-md-6 mb-3">
<label>Pendidikan Terakhir</label>
<input
type="text"
name="Pendidikan_Terakhir"
class="form-control"
value="{{ $dosen->Pendidikan_Terakhir }}">
</div>

<div class="col-md-6 mb-3">
<label>Jurusan</label>
<input
type="text"
name="Jurusan"
class="form-control"
value="{{ $dosen->Jurusan }}">
</div>

<div class="col-12 mb-4">
<label>Alamat</label>

<textarea
name="Alamat"
class="form-control">{{ $dosen->Alamat }}</textarea>

</div>

</div>

<button type="submit" class="btn btn-update">
Update Data
</button>

<input type="reset" value="Reset" class="btn btn-secondary btn-reset">

<a href="{{ route('dosen.index') }}" class="btn btn-outline-dark btn-reset">
Kembali
</a>

</form>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>