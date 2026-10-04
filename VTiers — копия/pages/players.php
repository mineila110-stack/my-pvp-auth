<?php

$players = [

    'VANDLEX' => [
        'discord' => 'VANDLEX',
        'joined' => '04.10.2026',

        'tiers' => [
            'Sword' => 'HT1',
            'Axe' => 'LT1',
            'Mace' => 'HT2',
            'SMP' => 'HT2',
            'UHC' => 'LT2',
            'Crystal' => 'HT3'
        ],

        'tests' => [
            [
                'mode' => 'Sword',
                'old' => 'LT1',
                'new' => 'HT1',
                'date' => '04.10.2026'
            ],
            [
                'mode' => 'Mace',
                'old' => 'LT2',
                'new' => 'HT2',
                'date' => '02.10.2026'
            ]
        ]
    ],

    'DreamPvP' => [
        'discord' => 'DreamPvP',
        'joined' => '01.10.2026',

        'tiers' => [
            'Sword' => 'LT1',
            'Axe' => 'HT2',
            'Mace' => 'HT2',
            'SMP' => 'HT3',
            'UHC' => 'HT3',
            'Crystal' => 'LT2'
        ],

        'tests' => [
            [
                'mode' => 'Sword',
                'old' => 'HT2',
                'new' => 'LT1',
                'date' => '03.10.2026'
            ]
        ]
    ],

    'ClownPierce' => [
        'discord' => 'ClownPierce',
        'joined' => '29.09.2026',

        'tiers' => [
            'Sword' => 'LT1',
            'Axe' => 'LT1',
            'Mace' => 'HT1',
            'SMP' => 'HT2',
            'UHC' => 'LT2',
            'Crystal' => 'HT2'
        ],

        'tests' => []
    ],

    'Minemanner' => [
        'discord' => 'Minemanner',
        'joined' => '28.09.2026',

        'tiers' => [
            'Sword' => 'HT2',
            'Axe' => 'HT2',
            'Mace' => 'LT1',
            'SMP' => 'HT3',
            'UHC' => 'HT2',
            'Crystal' => 'LT2'
        ],

        'tests' => []
    ]

];


$name = $_GET['name'] ?? 'VANDLEX';

if (!isset($players[$name])) {
    $name = 'VANDLEX';
}

$player = $players[$name];

?>

<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        VTiers — <?= htmlspecialchars($name) ?>
    </title>

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >

    <style>

        .profile-page {

            max-width: 1200px;

            margin: 0 auto;

            padding: 70px 6%;

        }


        .profile-top {

            display: flex;

            align-items: center;

            gap: 25px;

            padding: 35px;

            border: 1px solid #242424;

            background: #101010;

            border-radius: 14px;

            margin-bottom: 25px;

        }


        .profile-avatar {

            width: 100px;

            height: 100px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 15px;

            background: #191919;

            border: 1px solid #303030;

            color: #ff3030;

            font-size: 42px;

            font-weight: 900;

        }


        .profile-info {

            flex: 1;

        }


        .profile-info h1 {

            font-size: 38px;

            letter-spacing: -2px;

        }


        .profile-discord {

            color: #777;

            margin-top: 7px;

        }


        .profile-date {

            color: #555;

            font-size: 12px;

            margin-top: 10px;

        }


        .profile-grid {

            display: grid;

            grid-template-columns: 2fr 1fr;

            gap: 20px;

        }


        .profile-panel {

            background: #101010;

            border: 1px solid #242424;

            border-radius: 14px;

            padding: 28px;

        }


        .panel-title {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;

        }


        .panel-title h2 {

            font-size: 19px;

        }


        .panel-title span {

            color: #666;

            font-size: 12px;

        }


        .tier-item {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 17px;

            border-radius: 9px;

            background: #151515;

            border: 1px solid #222;

            margin-top: 8px;

        }


        .tier-item-left {

            display: flex;

            align-items: center;

            gap: 13px;

        }


        .mode-name {

            font-size: 14px;

            font-weight: 600;

        }


        .tier-badge {

            min-width: 55px;

            text-align: center;

            padding: 7px 10px;

            border-radius: 6px;

            background: #ff3030;

            font-size: 12px;

            font-weight: 900;

        }


        .history-item {

            padding: 15px 0;

            border-bottom: 1px solid #222;

        }


        .history-item:last-child {

            border-bottom: none;

        }


        .history-mode {

            font-weight: 700;

            font-size: 14px;

        }


        .history-date {

            color: #666;

            font-size: 11px;

            margin-top: 5px;

        }


        .history-tiers {

            margin-top: 10px;

            font-size: 12px;

            color: #888;

        }


        .history-tiers strong {

            color: white;

        }


        .profile-action {

            display: block;

            text-align: center;

            padding: 13px;

            background: #ff3030;

            border-radius: 8px;

            color: white;

            text-decoration: none;

            font-weight: 700;

            font-size: 13px;

            margin-top: 20px;

        }


        .profile-action:hover {

            background: #ff4545;

        }


        @media(max-width: 800px) {

            .profile-grid {

                grid-template-columns: 1fr;

            }

            .profile-top {

                align-items: flex-start;

            }

        }


        @media(max-width: 500px) {

            .profile-top {

                flex-direction: column;

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

        <a href="../index.php">
            Главная
        </a>

        <a href="tierlist.php">
            TierList
        </a>

        <a href="players.php">
            Игроки
        </a>

        <a href="tests.php">
            Тиртест
        </a>

        <a href="queue.php">
            Очередь
        </a>

        <a href="tournaments.php">
            Турниры
        </a>

        <a href="wiki.php">
            Wiki
        </a>

    </nav>


    <a
        href="auth/login.php"
        class="login-button"
    >
        Войти
    </a>

</header>


<main class="profile-page">


    <div class="profile-top">


        <div class="profile-avatar">

            <?= strtoupper(
                substr($name, 0, 1)
            ) ?>

        </div>


        <div class="profile-info">

            <h1>

                <?= htmlspecialchars($name) ?>

            </h1>


            <div class="profile-discord">

                Discord:
                <?= htmlspecialchars(
                    $player['discord']
                ) ?>

            </div>


            <div class="profile-date">

                Игрок VTiers с
                <?= htmlspecialchars(
                    $player['joined']
                ) ?>

            </div>

        </div>


    </div>


    <div class="profile-grid">


        <section class="profile-panel">


            <div class="panel-title">

                <h2>
                    Рейтинг игрока
                </h2>

                <span>
                    <?= count($player['tiers']) ?>
                    режимов
                </span>

            </div>


            <?php foreach (
                $player['tiers']
                as $mode => $tier
            ): ?>


                <div class="tier-item">


                    <div class="tier-item-left">

                        <div class="mode-name">

                            <?= htmlspecialchars(
                                $mode
                            ) ?>

                        </div>

                    </div>


                    <div class="tier-badge">

                        <?= htmlspecialchars(
                            $tier
                        ) ?>

                    </div>


                </div>


            <?php endforeach; ?>


        </section>


        <section class="profile-panel">


            <div class="panel-title">

                <h2>
                    История тестов
                </h2>

            </div>


            <?php if (
                count($player['tests']) === 0
            ): ?>

                <p style="color:#666; font-size:13px;">

                    История тестов отсутствует.

                </p>

            <?php endif; ?>


            <?php foreach (
                $player['tests']
                as $test
            ): ?>


                <div class="history-item">

                    <div class="history-mode">

                        <?= htmlspecialchars(
                            $test['mode']
                        ) ?>

                    </div>


                    <div class="history-tiers">

                        <?= htmlspecialchars(
                            $test['old']
                        ) ?>

                        →

                        <strong>

                            <?= htmlspecialchars(
                                $test['new']
                            ) ?>

                        </strong>

                    </div>


                    <div class="history-date">

                        <?= htmlspecialchars(
                            $test['date']
                        ) ?>

                    </div>

                </div>


            <?php endforeach; ?>


            <a
                href="tests.php"
                class="profile-action"
            >

                Пройти тиртест

            </a>


        </section>


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