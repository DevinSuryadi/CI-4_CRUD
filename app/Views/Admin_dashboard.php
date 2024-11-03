<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
        }

        h1 {
            text-align: center;
            color: navy;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
        }

        table thead {
            background-color: beige;
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: beige;
            color: navy;
        }

        table tr:hover {
            background-color: beige;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            background-color: beige;
            border: none;
            color: navy;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: beige;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['npm']); ?></td>
                        <td><?= htmlspecialchars($user['nama']); ?></td>
                        <td><?= htmlspecialchars($user['alamat']); ?></td>
                        <td class='action-buttons'>
                            <form method='POST' action='<?= site_url('admin_dashboard/edit/' . $user['npm']); ?>'>
                                <button type='submit'>Edit</button>
                            </form>
                            <form method='POST' action='<?= site_url('admin_dashboard/delete/' . $user['npm']); ?>'>
                                <button type='submit'>Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan='4'>Tidak ada data.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
