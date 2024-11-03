<h1>Tambah User</h1>
<form action="<?= site_url('users/store') ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="pass">Password:</label>
    <input type="password" name="pass" required>
    
    <label for="level">Level:</label>
    <select name="level">
        <option value="1">User</option>
        <option value="2">Admin</option>
    </select>
    
    <button type="submit">Simpan</button>
</form>
