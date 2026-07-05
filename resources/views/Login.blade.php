<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            padding: 20px;
        }

        /* CARD STYLE (Disamakan dengan Form Tambah Data) */
        .card {
            background: white;
            border: none;
            padding: 35px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            display: block;
            margin: 0 auto 20px auto;
        }

        .title {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
            text-align: center;
        }

        .subtitle {
            color: #6b7280;
            text-align: center;
            font-size: 14px;
            margin-top: 5px;
            margin-bottom: 30px;
        }

        /* FORM INPUTS */
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            outline: none;
            transition: .2s;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .15);
            background-color: #fff;
        }

        /* BUTTON */
        .btn-login {
            background: #2563eb;
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            font-size: 15px;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #1d4ed8;
            color: white;
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #4b5563;
        }

        .register-link a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">

    <div class="card">
        <img src="{{ asset('images/ITB-SS.jpg') }}" class="logo" alt="Logo ITBSS">

        <div class="title">Selamat Datang</div>
        <div class="subtitle">Sistem Informasi Akademik ITBSS</div>

        @if(session('success'))
            <div class="alert alert-success py-2 px-3 mb-3" style="border-radius: 8px; font-size: 14px;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger py-2 px-3 mb-3" style="border-radius: 8px; font-size: 14px;">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email anda" required autocomplete="username">
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan password anda" required autocomplete="current-password">
            </div>

            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>

        <div class="register-link">
            Belum punya akun? <a href="{{ route('register.view') }}">Daftar Sekarang</a>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>