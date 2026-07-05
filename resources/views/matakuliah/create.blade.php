<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .container-box{
            max-width:800px;
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
            color:#374151;
            margin-bottom:8px;
        }

        .form-control{
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
            Tambah Mata Kuliah
        </div>

        <div class="card-body">

            <form action="{{ route('matakuliah.save') }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label>Jurusan</label>
                        <input
                            type="text"
                            name="Jurusan"
                            class="form-control"
                            placeholder="Masukkan Jurusan">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Kode Mata Kuliah</label>
                        <input
                            type="text"
                            name="KodeMK"
                            class="form-control"
                            placeholder="Contoh: IF101">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label>Nama Mata Kuliah</label>
                        <input
                            type="text"
                            name="NamaMK"
                            class="form-control"
                            placeholder="Masukkan Nama Mata Kuliah">
                    </div>

                </div>

                <button type="submit" class="btn btn-save">
                    Simpan Data
                </button>

                <input type="reset" value="Reset" class="btn btn-secondary btn-reset">

                <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-dark btn-reset">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>