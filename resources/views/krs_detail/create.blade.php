<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah KRS Detail</title>

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

/* CONTAINER */
.container{
    max-width:900px;
    margin:auto;
}

/* HEADER */
.header a{
    text-decoration:none;
    color:#2563eb;
    font-weight:600;
}

.title{
    font-size:34px;
    font-weight:700;
    color:#1f2937;
    margin-top:15px;
}

.subtitle{
    color:#6b7280;
    margin-top:6px;
}

/* CARD */
.card{
    background:white;
    margin-top:25px;
    padding:30px;
    border-radius:16px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

/* FORM */
.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    font-weight:600;
    margin-bottom:8px;
    color:#374151;
}

input, select{
    width:100%;
    padding:12px 14px;
    border-radius:10px;
    border:1px solid #d1d5db;
    outline:none;
    transition:.2s;
    font-size:14px;
}

input:focus, select:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

/* BUTTON */
.btn{
    background:#2563eb;
    color:white;
    padding:12px 18px;
    border:none;
    border-radius:10px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.btn:hover{
    background:#1d4ed8;
}

.btn-back{
    display:inline-block;
    margin-bottom:10px;
    color:#2563eb;
    text-decoration:none;
    font-weight:600;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">
        <a href="/krs-detail">← Kembali</a>

        <div class="title">Tambah KRS Detail</div>
        <div class="subtitle">Isi form di bawah untuk menambahkan data KRS detail</div>
    </div>

    <div class="card">

        <form action="{{ route('krsdetail.save') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Kode KRS</label>
                <input type="number" name="kode_krs" placeholder="Masukkan kode KRS" required>
            </div>

            <div class="form-group">
                <label>Kode Kelas</label>
                <input type="text" name="kode_kelas" placeholder="Masukkan kode kelas" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status">
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="declined">Declined</option>
                </select>
            </div>

            <button type="submit" class="btn">Simpan Data</button>

        </form>

    </div>

</div>

</body>
</html>