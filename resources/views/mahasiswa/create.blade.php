<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:#f5f7fb;
    font-family: 'Segoe UI',sans-serif;
}

.page-title{
    font-size:42px;
    font-weight:700;
    color:#1e293b;
}

.sub-title{
    color:#64748b;
    margin-top:8px;
}

.card{
    border:none;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.form-label{
    font-weight:600;
    color:#334155;
}

.form-control{
    border-radius:12px;
    padding:12px 15px;
    border:1px solid #dbe4ee;
}

.form-control:focus{
    border-color:#3563e9;
    box-shadow:0 0 0 .2rem rgba(53,99,233,.15);
}

.icon-box{
    width:45px;
    height:45px;
    background:#eef4ff;
    color:#3563e9;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:12px;
    font-size:20px;
}

.btn-primary{
    background:#3563e9;
    border:none;
    border-radius:12px;
    padding:12px 28px;
}

.btn-primary:hover{
    background:#234fd4;
}

.btn-light{
    border-radius:12px;
    padding:12px 28px;
    border:1px solid #dcdcdc;
}

.header-icon{
    width:60px;
    height:60px;
    border-radius:15px;
    background:#eef4ff;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#3563e9;
    font-size:30px;
}

</style>

</head>
<body>

<div class="container py-5">

    <a href="{{ route('mahasiswa.index') }}" class="text-decoration-none">
        <i class="bi bi-arrow-left"></i>
        Kembali ke Data Mahasiswa
    </a>

    <div class="d-flex align-items-center mt-3 mb-4">

        <div class="header-icon me-3">
            <i class="bi bi-person-plus"></i>
        </div>

        <div>
            <div class="page-title">Tambah Mahasiswa</div>
            <div class="sub-title">
                Lengkapi formulir di bawah ini untuk menambahkan data mahasiswa.
            </div>
        </div>

    </div>

    <div class="card">

        <div class="card-body p-5">

            <form action="{{ route('mahasiswa.save') }}" method="POST">

                @csrf

                <div class="row mb-4 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-person me-2"></i>
                            Nama Lengkap
                        </label>
                    </div>

                    <div class="col-md-9">
                        <input
                            type="text"
                            name="Fullname"
                            class="form-control"
                            placeholder="Masukkan nama lengkap">
                    </div>

                </div>

                <div class="row mb-4 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-credit-card me-2"></i>
                            Nomor Induk Mahasiswa
                        </label>
                    </div>

                    <div class="col-md-9">
                        <input
                            type="text"
                            name="NIM"
                            class="form-control"
                            placeholder="Masukkan NIM">
                    </div>

                </div>

                <div class="row mb-4 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-person-vcard me-2"></i>
                            Nomor Induk Siswa Nasional
                        </label>
                    </div>

                    <div class="col-md-9">
                        <input
                            type="text"
                            name="NISN"
                            class="form-control"
                            placeholder="Masukkan NISN">
                    </div>

                </div>

                <div class="row mb-4 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-geo-alt me-2"></i>
                            Tempat Lahir
                        </label>
                    </div>

                    <div class="col-md-9">
                        <input
                            type="text"
                            name="Tempat_Lahir"
                            class="form-control"
                            placeholder="Masukkan Tempat Lahir">
                    </div>

                </div>

                <div class="row mb-4 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-calendar-event me-2"></i>
                            Tanggal Lahir
                        </label>
                    </div>

                    <div class="col-md-9">
                        <input
                            type="date"
                            name="Tanggal_Lahir"
                            class="form-control">
                    </div>

                </div>

                <div class="row mb-4">

                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-house me-2"></i>
                            Alamat
                        </label>
                    </div>

                    <div class="col-md-9">
                        <textarea
                            name="Alamat"
                            rows="4"
                            class="form-control"
                            placeholder="Masukkan alamat lengkap"></textarea>
                    </div>

                </div>

                <hr class="my-4">

                <button class="btn btn-primary">
                    <i class="bi bi-floppy me-2"></i>
                    Simpan Data
                </button>

                <button type="reset" class="btn btn-light ms-2">
                    <i class="bi bi-x-lg me-2"></i>
                    Batal / Clear
                </button>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>