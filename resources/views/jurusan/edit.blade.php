<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan</title>

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

        .btn-update{
            background:#2563eb;
            color:#fff;
            border:none;
            padding:12px 30px;
            border-radius:10px;
            font-weight:600;
        }

        .btn-update:hover{
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
            Edit Jurusan
        </div>

        <div class="card-body">

            <form action="{{ route('jurusan.edit', $jurusan->id) }}" method="POST">

                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $jurusan->id }}">

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label>Nama Jurusan</label>
                        <input
                            type="text"
                            name="Nama_Jurusan"
                            class="form-control"
                            value="{{ $jurusan->Nama_Jurusan }}">
                    </div>

                    <div class="col-md-12 mb-4">
                        <label>Kode Jurusan</label>
                        <input
                            type="text"
                            name="Kode_Jurusan"
                            class="form-control"
                            value="{{ $jurusan->Kode_Jurusan }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-update">
                    Update Data
                </button>

                <input type="reset" value="Reset" class="btn btn-secondary btn-reset">

                <a href="{{ route('jurusan.index') }}" class="btn btn-outline-dark btn-reset">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>