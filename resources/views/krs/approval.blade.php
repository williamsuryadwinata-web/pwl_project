<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval KRS</title>

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

        .aktif{
            background:#10b981;
        }

        .nonaktif{
            background:#ef4444;
        }

        .approved{
            background:#16a34a;
        }

        .rejected{
            background:#dc2626;
        }

        .btn{
            padding:8px 15px;
            border:none;
            border-radius:6px;
            color:white;
            cursor:pointer;
            font-weight:bold;
        }

        .btn-approve{
            background:#16a34a;
        }

        .btn-reject{
            background:#dc2626;
        }

        form{
            display:inline;
        }

    </style>

</head>
<body>

@include('navbar')

<div class="container">

    <div class="header">
        <h1>Approval KRS Mahasiswa</h1>
        <div class="line"></div>
        <p>Halaman persetujuan KRS oleh Dosen.</p>
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
                    <th>Aksi</th>
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

                    @if($item->status=="Approved")
                        <span class="badge approved">Approved</span>

                    @elseif($item->status=="Rejected")
                        <span class="badge rejected">Rejected</span>

                    @elseif($item->status=="aktif")
                        <span class="badge aktif">Aktif</span>

                    @else
                        <span class="badge nonaktif">{{ $item->status }}</span>
                    @endif

                </td>

                <td>{{ $item->total_sks }}</td>

                <td>

                    <form action="{{ route('approval.approve',$item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-approve">
                            Approve
                        </button>
                    </form>

                    <form action="{{ route('approval.reject',$item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-reject">
                            Reject
                        </button>
                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="7">
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