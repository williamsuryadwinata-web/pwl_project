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
            max-width:1400px;
            margin:auto;
        }

        .header{
            margin-bottom:35px;
        }

        .header h1{
            font-size:38px;
            color:#1f2937;
            margin-bottom:12px;
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
        }

        .top-button{
            display:flex;
            justify-content:flex-end;
            margin-bottom:20px;
        }

        .btn-add{
            background:#16a34a;
            color:white;
            padding:10px 18px;
            text-decoration:none;
            border-radius:8px;
            font-weight:bold;
        }

        .btn-add:hover{
            background:#15803d;
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
            padding:15px;
        }

        tbody td{
            text-align:center;
            padding:15px;
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
            font-weight:bold;
        }

        .pending{
            background:#f59e0b;
        }

        .approved{
            background:#16a34a;
        }

        .partial{
            background:#3b82f6;
        }

        .declined{
            background:#dc2626;
        }
    </style>
</head>

<body>

@include('navbar')

<div class="container">

    <div class="header">
        <h1>Data KRS Mahasiswa</h1>
        <div class="line"></div>
        <p>Kelola data KRS mahasiswa.</p>
    </div>

    <div class="top-button">
        @if(auth()->user()->role == 'admin')
            <a href="{{ route('krs.add') }}" class="btn-add">
                + Tambah KRS
            </a>
        @elseif(auth()->user()->role == 'mahasiswa')
            <a href="{{ route('krs.add') }}" class="btn-add">
                + Ajukan KRS
            </a>
        @endif
    </div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
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
                    <td>{{ $item->mahasiswa->Fullname ?? '-' }}</td>
                    <td>{{ $item->tahun_ajaran }}</td>
                    <td>{{ ucfirst($item->semester) }}</td>
                    <td>
                        @if($item->status=='approved')
                            <span class="badge approved">
                                Approved
                            </span>
                        @elseif($item->status=='declined')
                            <span class="badge declined">
                                Declined
                            </span>
                        @elseif($item->status=='partial')
                            <span class="badge partial">
                                Partial
                            </span>
                        @else
                            <span class="badge pending">
                                Pending
                            </span>
                        @endif
                    </td>
                    <td>{{ $item->total_sks }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        Belum ada data KRS.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</div>

</body>
</html>