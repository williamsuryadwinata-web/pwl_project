<!DOCTYPE html>
<html>
<head>
    <title>Tambah KRS</title>
</head>
<body>

    <h2>Tambah Data KRS</h2>

    <form action="{{ route('krs.save') }}" method="POST">
        @csrf

        <div>
            <label>Kode Mahasiswa</label><br>
            <input type="number" name="kode_mahasiswa" required>
        </div>

        <br>

        <div>
            <label>Tahun Ajaran</label><br>
            <input type="text" name="tahun_ajaran" required>
        </div>

        <br>

        <div>
            <label>Semester</label><br>
            <select name="semester">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>
        </div>

        <br>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="partial">Partial</option>
                <option value="declined">Declined</option>
            </select>
        </div>

        <br>

        <div>
            <label>Total SKS</label><br>
            <input type="number" name="total_sks" required>
        </div>

        <br>

        <button type="submit">Simpan</button>
        <a href="/krs">Kembali</a>

    </form>

</body>
</html>