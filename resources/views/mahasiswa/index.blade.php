<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

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
            max-width:1350px;
            margin:auto;
        }

        .header{
            margin-bottom:35px;
        }

        .header h1{
            font-size:38px;
            color:#1f2937;
            margin-bottom:12px;
            font-weight:700;
        }

        .line{
            width:70px;
            height:4px;
            background:#2563eb;
            border-radius:10px;
            margin-bottom:15px;
        }

        .header p{
            color:#6b7280;
            font-size:15px;
        }

        .top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
            flex-wrap:wrap;
            gap:15px;
        }

        .btn-create{
            text-decoration:none;
            background:#2563eb;
            color:#fff;
            padding:12px 24px;
            border-radius:8px;
            font-weight:600;
            transition:.3s;
            box-shadow:0 5px 15px rgba(37,99,235,.2);
        }

        .btn-create:hover{
            background:#1d4ed8;
        }

        .table-box{
            background:#fff;
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
        }

        thead th{
            color:white;
            padding:16px;
            font-size:14px;
            font-weight:600;
        }

        tbody td{
            padding:16px;
            border-bottom:1px solid #f1f1f1;
            text-align:center;
            color:#374151;
        }

        tbody tr:hover{
            background:#f9fbff;
        }

        .btn-edit{
            display:inline-block;
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:8px 16px;
            border-radius:6px;
            margin-bottom:8px;
            transition:.3s;
            font-size:14px;
        }

        .btn-edit:hover{
            background:#1d4ed8;
        }

        .btn-delete{
            width:100%;
            border:none;
            background:#ef4444;
            color:white;
            padding:8px;
            border-radius:6px;
            cursor:pointer;
            transition:.3s;
            font-size:14px;
        }

        .btn-delete:hover{
            background:#dc2626;
        }

        .action-form{
            margin-top:6px;
        }

        .footer{
            display:flex;
            justify-content:space-between;
            margin-top:20px;
            color:#6b7280;
            font-size:14px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Data Mahasiswa</h1>
        <div class="line"></div>
        <p>Kelola informasi mahasiswa secara mudah, cepat, dan terstruktur.</p>
    </div>

    <div class="top">
        <a href="{{ route('mahasiswa.add') }}" class="btn-create">
            + Tambah Mahasiswa
        </a>
        </div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>NISN</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->Fullname }}</td>
                    <td>{{ $m->NIM }}</td>
                    <td>{{ $m->NISN }}</td>
                    <td>{{ $m->Tempat_Lahir }}</td>
                    <td>{{ $m->Tanggal_Lahir }}</td>
                    <td>{{ $m->Alamat }}</td>
                    <td>{{ $m->created_at->format('d-m-Y H:i') }}</td>

                    <td>
                        <a href="{{ route('mahasiswa.edit.form', $m->id) }}" class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswa.delete', $m->id) }}" method="POST" class="action-form">
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn-delete"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" style="padding:25px;">
                        Belum ada data mahasiswa.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="footer">
        <span>Total Data : {{ $mahasiswa->count() }}</span>
        <span>School Management System © 2026</span>
    </div>

</div>

</body>
</html>