@php
use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container-box {
            max-width: 800px;
            margin: 50px auto;
        }
        .card-custom {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }
        .card-header-custom {
            background: #2563eb;
            color: white;
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            padding: 35px;
        }
    </style>
</head>
<body>

<div class="container-box">
    <div class="card card-custom">
        <div class="card-header-custom">
            <span>Form Tambah KRS</span>
        </div>

        <div class="card-body">
            <form action="{{ route('krs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <select name="kode_mahasiswa" class="form-select" required>
                        <option value="">-- Pilih Mahasiswa --</option>
                        @foreach($mahasiswa as $m)
                            <option value="{{ $m->id }}">
                                {{ $m->Fullname }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="Contoh: 2025/2026" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <select name="semester" class="form-select" required>
                        <option value="">-- Pilih Semester --</option>
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total SKS</label>
                    <input type="number" name="total_sks" class="form-control" placeholder="Masukkan total SKS" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" style="background: #2563eb; border: none;">Simpan KRS</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>