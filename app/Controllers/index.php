<h1>Daftar Users</h1>
<a href="<?= site_url('users/create') ?>">Tambah User</a>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['level'] ?></td>
            <td>
                <!-- Tambahkan link untuk edit dan delete -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
