<form action="/kelas/store" method="POST">

    @csrf

    <label>Kode Kelas</label><br>
    <input type="text"
           name="kode_kelas">
    <br><br>


    <label>Mata Kuliah</label><br>
    <select name="kode_mata_kuliah">

        <option value="">
            -- Pilih Mata Kuliah --
        </option>

        @foreach($matakuliah as $m)
            <option value="{{ $m->id }}">
                {{ $m->NamaMK }}
            </option>
        @endforeach

    </select>
    <br><br>


    <label>Dosen</label><br>
    <select name="kode_dosen">

        <option value="">
            -- Pilih Dosen --
        </option>

        @foreach($dosen as $d)
            <option value="{{ $d->id }}">
                {{ $d->Fullname }}
            </option>
        @endforeach

    </select>
    <br><br>


    <label>Hari</label><br>
    <select name="hari">
        <option value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
    </select>
    <br><br>


    <label>Jam</label><br>
    <select name="jam">
        <option value="08:00 - 09:40">
            08:00 - 09:40
        </option>

        <option value="09:50 - 11:30">
            09:50 - 11:30
        </option>

        <option value="12:30 - 14:10">
            12:30 - 14:10
        </option>

        <option value="17:00 - 18:40">
            17:00 - 18:40
        </option>

        <option value="19:00 - 20:40">
            19:00 - 20:40
        </option>
    </select>
    <br><br>


    <label>Tahun Ajaran</label><br>
    <input type="text"
           name="tahun_ajaran">
    <br><br>


    <label>Ruang Kelas</label><br>
    <input type="text"
           name="ruang_kelas">
    <br><br>


    <label>Jumlah Max</label><br>
    <input type="number"
           name="jumlah_max">
    <br><br>


    <label>Semester</label><br>

    <input type="radio"
           name="semester"
           value="ganjil">

    Ganjil

    <input type="radio"
           name="semester"
           value="genap">

    Genap

    <br><br>

    <input type="submit"
           value="Simpan">

</form>