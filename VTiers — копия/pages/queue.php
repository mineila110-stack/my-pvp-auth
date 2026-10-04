<?php

$modes = [
    'Sword' => '⚔️',
    'Axe' => '🪓',
    'Mace' => '🔨',
    'SMP' => '🛡️',
    'UHC' => '❤️',
    'Crystal' => '◆',
    'Pot' => '🧪'
];

?>

<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>VTiers — Тиртест</title>

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >

    <style>

        .test-page {

            max-width: 1000px;

            margin: auto;

            padding: 70px 6%;

        }


        .test-header {

            text-align: center;

            margin-bottom: 50px;

        }


        .test-header span {

            color: #ff3030;

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 3px;

        }


        .test-header h1 {

            font-size: 55px;

            margin-top: 10px;

            letter-spacing: -3px;

        }


        .test-header p {

            color: #777;

            max-width: 550px;

            margin: 15px auto;

            line-height: 1.6;

        }


        .test-box {

            background: #101010;

            border: 1px solid #242424;

            border-radius: 14px;

            padding: 30px;

        }


        .test-box h2 {

            font-size: 20px;

            margin-bottom: 7px;

        }


        .test-box-description {

            color: #666;

            font-size: 13px;

            margin-bottom: 25px;

        }


        .test-modes {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 10px;

        }


        .test-mode {

            display: flex;

            align-items: center;

            gap: 15px;

            padding: 18px;

            border-radius: 9px;

            border: 1px solid #292929;

            background: #151515;

            color: white;

            text-decoration: none;

            transition: .2s;

        }


        .test-mode:hover {

            border-color: #ff3030;

            background: #191919;

            transform: translateY(-2px);

        }


        .test-mode-icon {

            width: 40px;

            height: 40px;

            border-radius: 8px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #202020;

            font-size: 18px;

        }


        .test-mode-info strong {

            display: block;

            font-size: 14px;

        }


        .test-mode-info span {

            display: block;

            color: #666;

            font-size: 11px;

            margin-top: 5px;

        }


        @media(max-width:600px) {

            .test-modes {

                grid-template-columns: 1fr;

            }

            .test-header h1 {

                font-size: 42px;

            }

        }

    </style>

</head>


<body>


<header class="navbar">

    <a href="../index.php" class="logo">

        <span class="logo-v">V</span>

        <span>VTiers</span>

    </a>


    <nav class="nav-links">

        <a href="../index.php">Главная</a>

        <a href="tierlist.php">TierList</a>

        <a href="players.php">Игроки</a>

        <a href="tests.php">Тиртест</a>

        <a href="queue.php">Очередь</a>

        <a href="tournaments.php">Турниры</a>

        <a href="wiki.php">Wiki</a>

    </nav>


    <a
        href="auth/login.php"
        class="login-button"
    >
        Войти
    </a>

</header>


<main class="test-page">


    <div class="test-header">

        <span>
            OFFICIAL TESTING
        </span>

        <h1>
            Тиртест
        </h1>

        <p>

            Выбери режим, в котором хочешь
            пройти тестирование и получить
            официальный рейтинг VTiers.

        </p>

    </div>


    <div class="test-box">


        <h2>
            Выбери режим
        </h2>


        <div class="test-box-description">

            После выбора ты сможешь
            встать в очередь к тестировщику.

        </div>


        <div class="test-modes">


            <?php foreach (
                $modes
                as $mode => $icon
            ): ?>


                <a
                    href="queue.php?mode=<?= urlencode($mode) ?>"
                    class="test-mode"
                >


                    <div class="test-mode-icon">

                        <?= $icon ?>

                    </div>


                    <div class="test-mode-info">

                        <strong>

                            <?= htmlspecialchars(
                                $mode
                            ) ?>

                        </strong>


                        <span>

                            Встать в очередь

                        </span>

                    </div>


                </a>


            <?php endforeach; ?>


        </div>


    </div>


</main>


<footer>

    <div class="footer-logo">

        <span>V</span>
        VTiers

    </div>

    <p>
        Minecraft PvP TierList Platform
    </p>

    <p>
        © 2026 VTiers
    </p>

</footer>


</body>

</html>