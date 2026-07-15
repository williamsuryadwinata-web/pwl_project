<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        body{
            background:#f4f6f9;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:40px 0;
        }

        .register-container{
            max-width:450px;
            width:100%;
            padding:20px;
        }

        .card{
            background:#fff;
            border:none;
            padding:35px 30px;
            border-radius:16px;
            box-shadow:0 10px 25px rgba(0,0,0,.06);
        }

        .logo{
            width:90px;
            height:90px;
            object-fit:contain;
            display:block;
            margin:0 auto 20px;
        }

        .title{
            font-size:28px;
            font-weight:700;
            color:#1f2937;
            text-align:center;
        }

        .subtitle{
            color:#6b7280;
            text-align:center;
            font-size:14px;
            margin-top:5px;
            margin-bottom:30px;
        }

        .form-label{
            font-weight:600;
            color:#374151;
            margin-bottom:8px;
            font-size:14px;
        }

        .form-control{
            width:100%;
            padding:12px 14px;
            border-radius:10px;
            border:1px solid #d1d5db;
            outline:none;
            transition:.2s;
            font-size:14px;
        }

        .form-control:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 3px rgba(37,99,235,.15);
        }

        .btn-register{
            background:#2563eb;
            color:#fff;
            padding:12px;
            border:none;
            border-radius:10px;
            font-weight:600;
            margin-top:10px;
        }

        .btn-register:hover{
            background:#1d4ed8;
            color:#fff;
        }

        .login-link{
            text-align:center;
            margin-top:25px;
            font-size:14px;
        }

        .login-link a{
            text-decoration:none;
            color:#2563eb;
            font-weight:600;
        }

        .login-link a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>

<div class="register-container">

    <div class="card">

        <img src="{{ asset('images/ITB-SS.jpg') }}" class="logo">

        <div class="title">Daftar Akun</div>

        <div class="subtitle">
            Buat akun baru untuk mengakses Sistem Informasi Akademik
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>

                <select class="form-control" name="role" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Masukkan password"
                    required>
            </div>

            <div class="mb-4">
                <label class="form-label">Konfirmasi Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required>
            </div>

            <button type="submit" class="btn btn-register w-100">
                Register
            </button>

        </form>

        <div class="login-link">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login di sini</a>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>