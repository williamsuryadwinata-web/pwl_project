<!DOCTYPE html>
<html>
<head>
    <title>Data KRS</title>
</head>
<body>

    <h2>Data KRS</h2>

    <a href="/krs-create">Tambah Data KRS</a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Kode Mahasiswa</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
            <th>Status</th>
            <th>Total SKS</th>
        </tr>

        @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->kode_mahasiswa }}</td>
            <td>{{ $item->tahun_ajaran }}</td>
            <td>{{ $item->semester }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->total_sks }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>