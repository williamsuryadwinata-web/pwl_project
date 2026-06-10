<!DOCTYPE html>
<html>
<head>
    <title>Tambah KRS Detail</title>
</head>
<body>

<h2>Tambah KRS Detail</h2>

<form action="{{ route('krsdetail.save') }}" method="POST">
    @csrf

    <div>
        <label>Kode KRS</label><br>
        <input type="number" name="kode_krs" required>
    </div>

    <br>

    <div>
        <label>Kode Kelas</label><br>
        <input type="number" name="kode_kelas" required>
    </div>

    <br>

    <div>
        <label>Status</label><br>
        <select name="status">
            <option value="pending">Pending</option>
            <option value="approved">Approved</option>
            <option value="declined">Declined</option>
        </select>
    </div>

    <br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>