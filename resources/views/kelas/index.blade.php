<a href="/kelas/create">
    <input type="button" value="Create">
</a>

<table border="1">
    <thead>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Dosen</th>
        <th>Nama Mata Kuliah</th>
        <th>Ruang Kelas</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Tahun Ajaran</th>
        <th>Aksi</th>
    </thead>

    @foreach ($kelas as $m)
    <tr>
        <td>{{ $m->id }}</td>
        <td>{{ $m->kode_kelas }}</td>

        <td>{{ $m->dosen->Fullname }}</td>

        <td>{{ $m->matakuliah->NamaMK }}</td>

        <td>{{ $m->ruang_kelas }}</td>
        <td>{{ $m->hari }}</td>
        <td>{{ $m->jam }}</td>
        <td>{{ $m->tahun_ajaran }}</td>

        <td>
            <form action="/kelas/{{ $m->id }}"
                  method="post">

                @csrf
                <input type="hidden"
                       name="_method"
                       value="DELETE">

                <input type="submit"
                       value="Delete">
            </form>
        </td>
    </tr>
    @endforeach

</table>