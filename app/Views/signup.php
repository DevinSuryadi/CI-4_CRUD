<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: navy;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: navy;
            color: beige;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: navy;
        }
        a {
            text-align: center;
            color: navy;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <form action="/auth/register" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="npm">NPM:</label>
            <input type="text" name="npm" id="npm" required>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>
            <input type="submit" name="signup" value="Signup">
        </form>
        <?php if(session()->getFlashdata('errors')): ?>
            <div>
                <?= session()->getFlashdata('errors') ?>
            </div>
        <?php endif; ?>
        <a href="/login">Login disini</a>
    </div>
</body>
</html>
