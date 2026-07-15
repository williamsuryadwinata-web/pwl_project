<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .container-box{
            max-width:900px;
            margin:50px auto;
        }

        .title{
            font-size:38px;
            font-weight:bold;
            color:#1f2937;
        }

        .line{
            width:70px;
            height:4px;
            background:#2563eb;
            border-radius:10px;
            margin:15px 0 25px;
        }

        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        .card-header{
            background:#2563eb;
            color:white;
            font-size:22px;
            font-weight:bold;
            border-radius:18px 18px 0 0 !important;
            padding:18px;
        }

        .card-body{
            padding:30px;
        }

        .form-label{
            font-weight:600;
            color:#374151;
        }

        .form-control{
            border-radius:10px;
            padding:10px;
        }

        textarea{
            resize:none;
        }

        .btn-save{
            background:#2563eb;
            color:white;
            border:none;
            border-radius:8px;
            padding:10px 25px;
        }

        .btn-save:hover{
            background:#1d4ed8;
        }

        .btn-reset{
            background:#6b7280;
            color:white;
            border:none;
            border-radius:8px;
            padding:10px 25px;
        }

        .btn-reset:hover{
            background:#4b5563;
        }

        .btn-back{
            background:#198754;
            color:white;
            text-decoration:none;
            border-radius:8px;
            padding:10px 25px;
            display:inline-block;
        }

        .btn-back:hover{
            background:#157347;
            color:white;
        }

    </style>

</head>

<body>

<div class="container-box">

    <h1 class="title">Tambah Dosen</h1>

    <div class="line"></div>

    <div class="card">

        <div class="card-header">
            Form Tambah Dosen
        </div>

        <div class="card-body">

            <form action="{{ route('dosen.save') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="Fullname" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor Dosen (ND)</label>
                    <input type="text" class="form-control" name="ND" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="Tanggal_Lahir" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="Pendidikan_Terakhir" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="Jurusan" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="4" name="Alamat" required></textarea>
                </div>

                <a href="{{ route('dosen.index') }}" class="btn-back">
                    ← Kembali
                </a>

                <button type="reset" class="btn btn-reset">
                    Reset
                </button>

                <button type="submit" class="btn btn-save">
                    + Tambah Data
                </button>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>