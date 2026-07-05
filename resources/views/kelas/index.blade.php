<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:1450px;
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
            margin-bottom:25px;
        }

        .btn-create{
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:12px 24px;
            border-radius:8px;
            font-weight:600;
            transition:.3s;
            box-shadow:0 5px 15px rgba(37,99,235,.2);
            display:inline-block;
        }

        .btn-create:hover{
            background:#1d4ed8;
        }

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
        }

        thead th{
            color:white;
            padding:16px;
            font-size:14px;
            font-weight:600;
        }

        tbody td{
            padding:16px;
            text-align:center;
            border-bottom:1px solid #f1f1f1;
            color:#374151;
        }

        tbody tr:hover{
            background:#f9fbff;
        }

        .btn-delete{
            border:none;
            background:#ef4444;
            color:white;
            padding:8px 18px;
            border-radius:6px;
            cursor:pointer;
            transition:.3s;
        }

        .btn-delete:hover{
            background:#dc2626;
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

        <h1>Data Kelas</h1>

        <div class="line"></div>

        <p>Kelola data kelas secara mudah, cepat, dan profesional.</p>

    </div>

    <div class="top">

        <a href="/kelas/create" class="btn-create">
            + Tambah Kelas
        </a>

    </div>

    <div class="table-box">

        <table>

            <thead>

                <tr>

                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Ruang</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Tahun Ajaran</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($kelas as $m)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $m->kode_kelas }}</td>

                <td>{{ $m->dosen->Fullname }}</td>

                <td>{{ $m->matakuliah->NamaMK }}</td>

                <td>{{ $m->ruang_kelas }}</td>

                <td>{{ $m->hari }}</td>

                <td>{{ $m->jam }}</td>

                <td>{{ $m->tahun_ajaran }}</td>

                <td>

                    <form action="/kelas/{{ $m->id }}" method="POST">

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
                    Belum ada data kelas.
                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="footer">

        <span>Total Data : {{ $kelas->count() }}</span>

        <span>School Management System © 2026</span>

    </div>

</div>

</body>
</html>