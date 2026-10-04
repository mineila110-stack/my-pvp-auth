<?php

require_once __DIR__ . '/../../config/config.php';

if (isAdmin()) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (
        $username === ADMIN_USERNAME &&
        $password === ADMIN_PASSWORD
    ) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;

        header('Location: index.php');
        exit;
    }

    $error = 'Неверный логин или пароль';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Админка — VTiers</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-login {
            width: 400px;
            max-width: 90%;
            background: #111;
            border: 1px solid #242424;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,.4);
        }

        .admin-login h1 {
            margin-bottom: 10px;
        }

        .admin-login p {
            color: #888;
            margin-bottom: 25px;
        }

        .admin-input {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            margin-bottom: 14px;
            border: 1px solid #292929;
            border-radius: 10px;
            background: #080808;
            color: white;
            outline: none;
        }

        .admin-input:focus {
            border-color: #ff3030;
        }

        .admin-button {
            width: 100%;
            border: none;
            cursor: pointer;
        }

        .admin-error {
            background: rgba(255, 48, 48, .1);
            border: 1px solid rgba(255, 48, 48, .3);
            color: #ff5555;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 18px;
        }
    </style>
</head>

<body>

<div class="admin-login">

    <h1>VTiers Admin</h1>

    <p>Вход в панель администратора</p>

    <?php if ($error): ?>
        <div class="admin-error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <input
            class="admin-input"
            type="text"
            name="username"
            placeholder="Логин"
            required
        >

        <input
            class="admin-input"
            type="password"
            name="password"
            placeholder="Пароль"
            required
        >

        <button class="btn btn-primary admin-button" type="submit">
            Войти
        </button>

    </form>

</div>

</body>
</html>