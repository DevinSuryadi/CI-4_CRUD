<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Users</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

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
                <a href="<?= site_url('users/edit/' . $user['username']) ?>">Edit</a>
                <form method="POST" action="<?= site_url('users/delete/' . $user['username']) ?>" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
