<!DOCTYPE html>
<html>
<head>
    <title>Data KRS Detail</title>
</head>
<body>

<h2>Data KRS Detail</h2>

<a href="/krs-detail-create">Tambah Data</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Kode KRS</th>
        <th>Kode Kelas</th>
        <th>Status</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->kode_krs }}</td>
        <td>{{ $item->kode_kelas }}</td>
        <td>{{ $item->status }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>