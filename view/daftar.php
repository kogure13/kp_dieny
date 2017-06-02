<fieldset>
    <legend>Form Data Mahasiswa</legend>
    <table class="table-responsive table-condensed">
        <tr>
            <td rowspan="14" valign="top">
                <img src="" alt="Pas Foto">
            </td>
            <td>NIM</td><td><input type="text" id="nim" name="nim" size="8"></td>
        </tr>
        <tr>
            <td>Nama</td><td><input type="text" id="nama" name="nama" size="25"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>
                <label class="radio-inline">
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                </label>
                <label class="radio-inline">
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </label>
            </td>
        </tr>
        <tr>
            <td>Alamat Asal</td>
            <td>
                <textarea id="alamat_asal" name="alamat_asal"></textarea>
            </td>
        </tr>
        <tr>
            <td>Alamat Sekarang</td>
            <td>
                <textarea  id="alamat_sekarang" name="alamat_sekarang"></textarea>                
            </td>
        </tr>
        <tr>
            <td>Telp. Rumah</td><td><input type="text" id="tlp_rumah" name="tlp_rumah" size="12"></td>
        </tr>
        <tr>
            <td>Hp / BB</td><td><input type="text" id="no_hp" name="no_hp" size="10"> / <input type="text" id="pin_bb" name="pin_bb" size="7"></td>
        </tr>
        <tr>
            <td>E-mail</td><td><input type="text" id="email" name="email" size="25"></td>
        </tr>
        <tr>
            <td>Nama Perusahaan</td><td><input type="text" id="nama_kantor" name="nama_kantor" size="22"></td>
        </tr>
        <tr>
            <td>Jabatan</td><td><input type="text" id="jabatan" name="jabatan" size="15"></td>
        </tr>
        <tr>
            <td>Alamat Perusahaan</td>
            <td>
                <textarea id="alamat_kantor" name="alamat_kantor"></textarea>                
            </td>
        </tr>
        <tr>
            <td>No. Tlp Perusahaan</td><td><input type="text" id="tlp_kantor" name="tlp_kantor" size="10"></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>
                <select name="jurusan" id="jurusan">
                    <option value="">...</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tahun Angkatan</td><td><input type="text" id="angkatan" name="angkatan" size="5"></td>
        </tr>
    </table>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary" id="btn-save">Simpan</button>
        <button type="button" class="btn btn-sm btn-danger" id="btn-cacnel">Batal</button>
    </div>
</fieldset>