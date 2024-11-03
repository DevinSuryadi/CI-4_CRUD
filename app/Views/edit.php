<h2>Edit Data Mahasiswa</h2>
<form method="post" action="<?= base_url('mahasiswa/update/'.$mahasiswa['id']) ?>">
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>"><br>
    <label>NIM</label>
    <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>"><br>
    <label>Jurusan</label>
    <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>"><br>
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?= $mahasiswa['alamat'] ?>"><br>
    <button type="submit">Update</button>
</form>
