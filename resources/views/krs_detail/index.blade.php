<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data KRS Detail</title>

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
    max-width:1200px;
    margin:auto;
}

/* HEADER */
.header{
    margin-bottom:30px;
}

.header h1{
    font-size:36px;
    color:#1f2937;
    font-weight:700;
}

.line{
    width:70px;
    height:4px;
    background:#2563eb;
    margin:10px 0;
    border-radius:10px;
}

.header p{
    color:#6b7280;
}

/* TOP BUTTON */
.top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin:25px 0;
}

.btn-create{
    background:#2563eb;
    color:white;
    padding:12px 20px;
    border-radius:8px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.btn-create:hover{
    background:#1d4ed8;
}

/* TABLE */
.table-box{
    background:white;
    border-radius:14px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#2563eb;
    color:white;
}

th, td{
    padding:15px;
    text-align:center;
    font-size:14px;
}

tbody tr{
    border-bottom:1px solid #eee;
}

tbody tr:hover{
    background:#f9fbff;
}

/* STATUS STYLE */
.status{
    padding:6px 10px;
    border-radius:8px;
    font-size:12px;
    font-weight:600;
    display:inline-block;
}

.status.active{
    background:#dcfce7;
    color:#16a34a;
}

.status.pending{
    background:#fef9c3;
    color:#ca8a04;
}

.status.inactive{
    background:#fee2e2;
    color:#dc2626;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">
        <h1>Data KRS Detail</h1>
        <div class="line"></div>
        <p>Kelola data KRS mahasiswa secara terstruktur dan mudah.</p>
    </div>

    <div class="top">
        <a href="/krs-detail-create" class="btn-create">+ Tambah Data</a>
    </div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode KRS</th>
                    <th>Kode Kelas</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kode_krs }}</td>
                    <td>{{ $item->kode_kelas }}</td>

                    <td>
                        <span class="status 
                            @if($item->status == 'aktif') active
                            @elseif($item->status == 'pending') pending
                            @else inactive
                            @endif">
                            {{ $item->status }}
                        </span>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>