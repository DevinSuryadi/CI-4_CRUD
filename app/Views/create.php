<h2>Tambah Data Mahasiswa</h2>
<form method="post" action="<?= base_url('mahasiswa/store') ?>">
    <label>Nama</label>
    <input type="text" name="nama"><br>
    <label>NIM</label>
    <input type="text" name="nim"><br>
    <label>Jurusan</label>
    <input type="text" name="jurusan"><br>
    <label>Alamat</label>
    <input type="text" name="alamat"><br>
    <button type="submit">Simpan</button>
</form>
