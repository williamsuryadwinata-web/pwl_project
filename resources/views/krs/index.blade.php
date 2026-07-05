<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KRS</title>

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
            margin-bottom:25px;
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
            display:inline-block;
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
            color:#fff;
            padding:16px;
            font-size:14px;
        }

        tbody td{
            padding:16px;
            text-align:center;
            border-bottom:1px solid #eee;
        }

        tbody tr:hover{
            background:#f9fbff;
        }

        .badge{
            padding:6px 12px;
            border-radius:20px;
            color:white;
            font-size:13px;
            font-weight:600;
        }

        .aktif{
            background:#10b981;
        }

        .nonaktif{
            background:#ef4444;
        }

        .footer{
            display:flex;
            justify-content:space-between;
            margin-top:20px;
            color:#6b7280;
        }

    </style>

</head>

<body>

@include('navbar')

<div class="container">

    <div class="header">
        <h1>Data KRS</h1>
        <div class="line"></div>
        <p>Kelola data Kartu Rencana Studi mahasiswa.</p>
    </div>

    <div class="top">

        <a href="{{ route('krs.add') }}" class="btn-create">
            + Tambah KRS
        </a>

    </div>

    <div class="table-box">

        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Kode Mahasiswa</th>
                    <th>Tahun Ajaran</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Total SKS</th>
                </tr>

            </thead>

            <tbody>

            @forelse($data as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->kode_mahasiswa }}</td>

                    <td>{{ $item->tahun_ajaran }}</td>

                    <td>{{ ucfirst($item->semester) }}</td>

                    <td>

                        @if($item->status=="aktif")

                            <span class="badge aktif">
                                Aktif
                            </span>

                        @else

                            <span class="badge nonaktif">
                                {{ ucfirst($item->status) }}
                            </span>

                        @endif

                    </td>

                    <td>{{ $item->total_sks }}</td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" style="padding:25px">
                        Belum ada data KRS.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="footer">

        <span>Total Data : {{ $data->count() }}</span>

        <span>School Management System © 2026</span>

    </div>

</div>

</body>
</html>