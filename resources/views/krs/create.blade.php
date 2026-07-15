<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan KRS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .container-box{
            max-width:700px;
            margin:50px auto;
        }

        .card-custom{
            border:none;
            border-radius:15px;
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

        .btn-save{
            background:#2563eb;
            color:white;
        }

        .btn-save:hover{
            background:#1d4ed8;
            color:white;
        }
    </style>
</head>

<body>

<div class="container-box">

    <div class="card card-custom">

        <div class="card-header">
            Pengajuan KRS
        </div>

        <div class="card-body">

            <form action="{{ route('krs.mahasiswa.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input
                        type="text"
                        name="nama_mahasiswa"
                        class="form-control"
                        placeholder="Masukkan nama mahasiswa"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Ajaran</label>

                    <input
                        type="text"
                        name="tahun_ajaran"
                        class="form-control"
                        placeholder="2025/2026"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>

                    <select name="semester" class="form-select">
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Total SKS</label>

                    <input
                        type="number"
                        name="total_sks"
                        class="form-control"
                        required>
                </div>

                <button class="btn btn-save">
                    Ajukan KRS
                </button>

                <a href="{{ route('krs.mahasiswa') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>