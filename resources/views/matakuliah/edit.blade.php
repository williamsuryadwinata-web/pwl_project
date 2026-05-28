<form action="{{route('matakuliah.edit', $matakuliah->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$matakuliah->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Jurusan" value="{{$matakuliah->Jurusan}}"></td>
        </tr>
        <tr>
            <td>Kode Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="KodeMK" value="{{$matakuliah->KodeMK}}"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="NamaMK" value="{{$matakuliah->NamaMK}}"></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>