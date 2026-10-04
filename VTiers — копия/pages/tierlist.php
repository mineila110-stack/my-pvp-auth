<?php

$modes = [
    'sword' => '⚔ Sword',
    'axe' => '🪓 Axe',
    'mace' => '🔨 Mace',
    'smp' => '🛡 SMP',
    'uhc' => '❤ UHC',
    'crystal' => '◆ Crystal'
];

$mode = $_GET['mode'] ?? 'sword';

if (!array_key_exists($mode, $modes)) {
    $mode = 'sword';
}

$players = [
    'HT1' => [
        ['name' => 'VANDLEX', 'points' => 1250],
        ['name' => 'DreamPvP', 'points' => 1210]
    ],

    'LT1' => [
        ['name' => 'ClownPierce', 'points' => 1160],
        ['name' => 'Minemanner', 'points' => 1120]
    ],

    'HT2' => [
        ['name' => 'Feinberg', 'points' => 1080],
        ['name' => 'PvP_Master', 'points' => 1040]
    ],

    'LT2' => [
        ['name' => 'Vortex', 'points' => 990],
        ['name' => 'Destroyer', 'points' => 960]
    ],

    'HT3' => [
        ['name' => 'AlexPvP', 'points' => 900]
    ],

    'LT3' => [
        ['name' => 'Shadow', 'points' => 850]
    ],

    'HT4' => [
        ['name' => 'PlayerOne', 'points' => 760]
    ],

    'LT4' => [
        ['name' => 'PlayerTwo', 'points' => 710]
    ],

    'HT5' => [
        ['name' => 'NewPlayer', 'points' => 600]
    ],

    'LT5' => [
        ['name' => 'Beginner', 'points' => 500]
    ]
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

    <title>VTiers — TierList</title>

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >

    <style>

        .tier-page {
            max-width: 1300px;
            margin: 0 auto;
            padding: 70px 6%;
        }

        .tier-header {
            margin-bottom: 35px;
        }

        .tier-header-label {
            color: #ff3030;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .tier-header h1 {
            font-size: 55px;
            margin-top: 10px;
            letter-spacing: -3px;
        }

        .tier-header p {
            color: #777;
            margin-top: 12px;
        }

        .mode-tabs {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .mode-tab {
            padding: 11px 16px;
            border-radius: 8px;
            border: 1px solid #292929;
            background: #111;
            color: #999;
            text-decoration: none;
            font-size: 13px;
            transition: .2s;
        }

        .mode-tab:hover {
            border-color: #444;
            color: white;
        }

        .mode-tab.active {
            background: #ff3030;
            border-color: #ff3030;
            color: white;
        }

        .tier-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .tier-row {
            display: grid;
            grid-template-columns: 110px 1fr;
            min-height: 100px;
            border: 1px solid #242424;
            border-radius: 10px;
            overflow: hidden;
            background: #0d0d0d;
        }

        .tier-name {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 900;
        }

        .tier-players {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            flex-wrap: wrap;
        }

        .player-card {
            min-width: 150px;
            height: 70px;
            padding: 12px;
            border: 1px solid #292929;
            border-radius: 8px;
            background: #151515;
            color: white;
            text-decoration: none;
            transition: .2s;
        }

        .player-card:hover {
            background: #1c1c1c;
            border-color: #444;
            transform: translateY(-2px);
        }

        .player-card strong {
            display: block;
            font-size: 14px;
        }

        .player-card span {
            display: block;
            color: #777;
            font-size: 11px;
            margin-top: 7px;
        }

        .ht1 .tier-name,
        .lt1 .tier-name {
            background: #ff3030;
        }

        .ht2 .tier-name,
        .lt2 .tier-name {
            background: #ff6b30;
        }

        .ht3 .tier-name,
        .lt3 .tier-name {
            background: #ffb130;
        }

        .ht4 .tier-name,
        .lt4 .tier-name {
            background: #30a8ff;
        }

        .ht5 .tier-name,
        .lt5 .tier-name {
            background: #777;
        }

        .tier-name {
            color: white;
        }

        @media (max-width: 700px) {

            .tier-header h1 {
                font-size: 42px;
            }

            .tier-row {
                grid-template-columns: 75px 1fr;
            }

            .tier-name {
                font-size: 17px;
            }

            .player-card {
                min-width: 130px;
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


<main class="tier-page">

    <div class="tier-header">

        <div class="tier-header-label">
            OFFICIAL RANKING
        </div>

        <h1>
            TierList
        </h1>

        <p>
            Рейтинг игроков VTiers по Minecraft PvP режимам.
        </p>

    </div>


    <div class="mode-tabs">

        <?php foreach ($modes as $slug => $name): ?>

            <a
                href="tierlist.php?mode=<?= htmlspecialchars($slug) ?>"
                class="mode-tab <?= $slug === $mode ? 'active' : '' ?>"
            >

                <?= htmlspecialchars($name) ?>

            </a>

        <?php endforeach; ?>

    </div>


    <div class="tier-list">

        <?php foreach ($players as $tier => $tierPlayers): ?>

            <div class="tier-row <?= strtolower($tier) ?>">

                <div class="tier-name">

                    <?= htmlspecialchars($tier) ?>

                </div>


                <div class="tier-players">

                    <?php foreach ($tierPlayers as $player): ?>

                        <a
                            class="player-card"
                            href="player.php?name=<?= urlencode($player['name']) ?>"
                        >

                            <strong>
                                <?= htmlspecialchars($player['name']) ?>
                            </strong>

                            <span>
                                <?= htmlspecialchars((string)$player['points']) ?>
                                рейтинговых очков
                            </span>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>

        <?php endforeach; ?>

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