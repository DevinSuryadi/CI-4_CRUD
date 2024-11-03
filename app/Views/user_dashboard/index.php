<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: beige;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h1 {
            text-align: center;
            color: navy;
        }
        p {
            margin: 10px 0;
        }
        .logout-btn {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: beige;
            color: navy;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: beige;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?= esc($user['nama']); ?>!</h1>
        <p><strong>NPM:</strong> <?= esc($user['npm']); ?></p>
        <p><strong>Alamat:</strong> <?= esc($user['alamat']); ?></p>
        <a href="<?= base_url('logout'); ?>" class="logout-btn">Logout</a>
    </div>
</body>
</html>
