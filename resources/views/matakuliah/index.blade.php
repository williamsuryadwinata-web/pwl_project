<a href={{route('matakuliah.add')}}>
                <input type="button" value="Create">
            </a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Jurusan</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Aksi</th>
    </thead>
    @foreach ($matakuliah as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->Jurusan}}</td>
        <td>{{$m->KodeMK}}</td>
        <td>{{$m->NamaMK}}</td>
        <td>{{$m->created_at}}</td>
        <td>
            <a href={{route('matakuliah.update',$m->id)}}>
                <input type="button" value="Edit">
            </a>
            <form action="{{route('matakuliah.delete', $m->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>
        </td>
    </tr>
    @endforeach
</table>