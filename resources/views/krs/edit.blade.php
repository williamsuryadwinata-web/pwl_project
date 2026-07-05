<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:700px;
            margin:auto;
        }

        .card{
            background:#fff;
            border-radius:15px;
            padding:35px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        h2{
            color:#1f2937;
            margin-bottom:25px;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
            color:#374151;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #d1d5db;
            border-radius:8px;
            outline:none;
            font-size:15px;
        }

        input:focus{
            border-color:#2563eb;
        }

        .btn-group{
            margin-top:30px;
            display:flex;
            gap:12px;
        }

        .btn{
            padding:12px 22px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:600;
            text-decoration:none;
        }

        .btn-update{
            background:#2563eb;
            color:white;
        }

        .btn-update:hover{
            background:#1d4ed8;
        }

        .btn-reset{
            background:#f59e0b;
            color:white;
        }

        .btn-reset:hover{
            background:#d97706;
        }

        .btn-back{
            background:#6b7280;
            color:white;
        }

        .btn-back:hover{
            background:#4b5563;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="card">

        <h2>Edit Mata Kuliah</h2>

        <form action="{{ route('matakuliah.edit', $matakuliah->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="Jurusan" value="{{ $matakuliah->Jurusan }}">
            </div>

            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" name="KodeMK" value="{{ $matakuliah->KodeMK }}">
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="NamaMK" value="{{ $matakuliah->NamaMK }}">
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-update">Update</button>
                <button type="reset" class="btn btn-reset">Reset</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-back">Kembali</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>