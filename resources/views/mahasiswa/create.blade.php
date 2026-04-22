<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
   <form action="{{route('mahasiswa.save')}}" method="post">
  @csrf
       <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="Fullname" size="30"></td>
            </tr>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="NIM" size="30"></td>
            </tr>
            <tr>
                <td>Nomor Induk Siswa Nasional</td>
                <td>:</td>
                <td><input type="text" name="NIDN" size="30"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30"></td>
            </tr>
            <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="Tanggal_Lahir"></td>
</tr>
            <tr>
                <td valign="top">Alamat</td>
                <td valign="top">:</td>
                <td><textarea name="Alamat" rows="4" cols="30"></textarea></td>
            </tr>
        </table>
        <button type="submit">Add</button>
    <button type="reset">Clear</button>
    </form>
</body>
</html>