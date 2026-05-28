<a href={{route('dosen.add')}}>
                <input type="button" value="Create">
            </a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Nomor Dosen</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Pendidikan Terakhir</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($dosen as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->Fullname}}</td>
        <td>{{$m->ND}}</td>
        <td>{{$m->Tempat_Lahir}}</td>
        <td>{{$m->Tanggal_Lahir}}</td>
        <td>{{$m->Pendidikan_Terakhir}}</td>
        <td>{{$m->Jurusan}}</td>
        <td>{{$m->Alamat}}</td>
        <td>{{$m->created_at}}</td>
        <td>
            <a href={{route('dosen.update',$m->id)}}>
                <input type="button" value="Edit">
            </a>
            <form action="{{route('dosen.delete', $m->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>
        </td>
    </tr>
    @endforeach
</table>