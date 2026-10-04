<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../config/database.php';

requireAdmin();

$playersCount = $pdo
    ->query("SELECT COUNT(*) FROM players")
    ->fetchColumn();

$modesCount = $pdo
    ->query("SELECT COUNT(*) FROM modes")
    ->fetchColumn();

$queueCount = $pdo
    ->query("
        SELECT COUNT(*)
        FROM test_queue
        WHERE status = 'waiting'
    ")
    ->fetchColumn();

$testsCount = $pdo
    ->query("SELECT COUNT(*) FROM test_history")
    ->fetchColumn();

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin — VTiers</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

    <style>

        body {
            margin: 0;
        }

        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .admin-sidebar {
            width: 240px;
            background: #0d0d0d;
            border-right: 1px solid #222;
            padding: 25px 15px;
            box-sizing: border-box;
        }

        .admin-logo {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 35px;
            padding-left: 10px;
        }

        .admin-logo span {
            color: #ff3030;
        }

        .admin-menu a {
            display: block;
            color: #aaa;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        .admin-menu a:hover {
            background: #181818;
            color: white;
        }

        .admin-menu .logout {
            color: #ff5555;
            margin-top: 25px;
        }

        .admin-content {
            flex: 1;
            padding: 35px;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .admin-header h1 {
            margin: 0;
        }

        .admin-user {
            color: #888;
        }

        .admin-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .admin-stat {
            background: #111;
            border: 1px solid #222;
            border-radius: 15px;
            padding: 25px;
        }

        .admin-stat-title {
            color: #888;
            margin-bottom: 12px;
        }

        .admin-stat-number {
            font-size: 32px;
            font-weight: 800;
        }

        .admin-card {
            background: #111;
            border: 1px solid #222;
            border-radius: 15px;
            padding: 25px;
        }

        .admin-card h2 {
            margin-top: 0;
        }

        @media (max-width: 900px) {

            .admin-stats {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 650px) {

            .admin-wrapper {
                display: block;
            }

            .admin-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #222;
            }

            .admin-stats {
                grid-template-columns: 1fr;
            }

            .admin-content {
                padding: 20px;
            }

        }

    </style>

</head>

<body>

<div class="admin-wrapper">

    <aside class="admin-sidebar">

        <div class="admin-logo">
            V<span>Tiers</span>
        </div>

        <nav class="admin-menu">

            <a href="index.php">
                📊 Главная
            </a>

            <a href="players.php">
                👤 Игроки
            </a>

            <a href="tiers.php">
                🏆 Тиры
            </a>

            <a href="tests.php">
                ⚔️ Тиртесты
            </a>

            <a href="queue.php">
                📋 Очередь
            </a>

            <a href="tournaments.php">
                🏆 Турниры
            </a>

            <a href="modes.php">
                ⚙️ Режимы
            </a>

            <a
                class="logout"
                href="logout.php"
            >
                🚪 Выйти
            </a>

        </nav>

    </aside>


    <main class="admin-content">

        <div class="admin-header">

            <div>
                <h1>Панель управления</h1>
            </div>

            <div class="admin-user">
                Администратор:
                <strong>
                    <?= htmlspecialchars($_SESSION['admin_username']) ?>
                </strong>
            </div>

        </div>


        <div class="admin-stats">

            <div class="admin-stat">

                <div class="admin-stat-title">
                    Игроки
                </div>

                <div class="admin-stat-number">
                    <?= $playersCount ?>
                </div>

            </div>


            <div class="admin-stat">

                <div class="admin-stat-title">
                    Режимы
                </div>

                <div class="admin-stat-number">
                    <?= $modesCount ?>
                </div>

            </div>


            <div class="admin-stat">

                <div class="admin-stat-title">
                    В очереди
                </div>

                <div class="admin-stat-number">
                    <?= $queueCount ?>
                </div>

            </div>


            <div class="admin-stat">

                <div class="admin-stat-title">
                    Проведено тестов
                </div>

                <div class="admin-stat-number">
                    <?= $testsCount ?>
                </div>

            </div>

        </div>


        <div class="admin-card">

            <h2>Добро пожаловать в VTiers Admin</h2>

            <p>
                Здесь ты сможешь полностью управлять TierList,
                игроками, тиртестами, очередью и турнирами.
            </p>

        </div>

    </main>

</div>

</body>
</html>