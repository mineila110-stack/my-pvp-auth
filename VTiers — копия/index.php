<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VTiers — Minecraft PvP TierList</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="navbar">

    <a href="index.php" class="logo">
        <span class="logo-v">V</span>
        <span>VTiers</span>
    </a>

    <nav class="nav-links">
        <a href="pages/tierlist.php">TierList</a>
        <a href="pages/players.php">Игроки</a>
        <a href="pages/tests.php">Тиртест</a>
        <a href="pages/queue.php">Очередь</a>
        <a href="pages/tournaments.php">Турниры</a>
        <a href="pages/wiki.php">Wiki</a>
        <a href="pages/team.php">Команда</a>
    </nav>

    <a href="pages/auth/login.php" class="login-button">
        Войти
    </a>

</header>


<main>

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                MINECRAFT PVP TIERLIST
            </div>

            <h1>
                Узнай свой
                <span>реальный тир.</span>
            </h1>

            <p>
                VTiers — платформа для рейтингов Minecraft PvP,
                тиртестов, турниров и статистики игроков.
            </p>

            <div class="hero-buttons">

                <a href="pages/tierlist.php" class="button button-primary">
                    Смотреть TierList
                </a>

                <a href="pages/tests.php" class="button button-secondary">
                    Пройти тиртест
                </a>

            </div>

        </div>


        <div class="hero-logo">

            <div class="logo-circle">
                V
            </div>

            <div class="hero-stats">

                <div>
                    <strong>0</strong>
                    <span>Игроков</span>
                </div>

                <div>
                    <strong>0</strong>
                    <span>Тестов</span>
                </div>

                <div>
                    <strong>0</strong>
                    <span>Режимов</span>
                </div>

            </div>

        </div>

    </section>


    <section class="section">

        <div class="section-title">

            <div>
                <span>RANKING</span>
                <h2>Популярные режимы</h2>
            </div>

            <a href="pages/tierlist.php">
                Все режимы →
            </a>

        </div>


        <div class="mode-grid">

            <a href="pages/tierlist.php?mode=sword" class="mode-card">
                <div class="mode-icon">⚔</div>
                <h3>Sword</h3>
                <p>Minecraft Sword PvP</p>
            </a>

            <a href="pages/tierlist.php?mode=axe" class="mode-card">
                <div class="mode-icon">🪓</div>
                <h3>Axe</h3>
                <p>Minecraft Axe PvP</p>
            </a>

            <a href="pages/tierlist.php?mode=mace" class="mode-card">
                <div class="mode-icon">🔨</div>
                <h3>Mace</h3>
                <p>Mace PvP</p>
            </a>

            <a href="pages/tierlist.php?mode=smp" class="mode-card">
                <div class="mode-icon">🛡</div>
                <h3>SMP</h3>
                <p>SMP PvP</p>
            </a>

            <a href="pages/tierlist.php?mode=uhc" class="mode-card">
                <div class="mode-icon">❤</div>
                <h3>UHC</h3>
                <p>UHC PvP</p>
            </a>

            <a href="pages/tierlist.php?mode=crystal" class="mode-card">
                <div class="mode-icon">◆</div>
                <h3>Crystal</h3>
                <p>Crystal PvP</p>
            </a>

        </div>

    </section>


    <section class="section info-section">

        <div class="info-card">

            <span>01</span>

            <h2>Пройди тест</h2>

            <p>
                Встань в очередь на официальный тиртест
                выбранного режима.
            </p>

        </div>


        <div class="info-card">

            <span>02</span>

            <h2>Получи тир</h2>

            <p>
                Тестировщик определит твой уровень
                и выдаст соответствующий тир.
            </p>

        </div>


        <div class="info-card">

            <span>03</span>

            <h2>Попади в рейтинг</h2>

            <p>
                Результат появится в твоём профиле
                и общей таблице VTiers.
            </p>

        </div>

    </section>


    <section class="tiers-section">

        <div class="section-title">

            <div>
                <span>RANK SYSTEM</span>
                <h2>Система тиров</h2>
            </div>

        </div>


        <div class="tiers">

            <div class="tier tier-ht1">
                <b>HT1</b>
                <span>Highest Tier</span>
            </div>

            <div class="tier tier-lt1">
                <b>LT1</b>
                <span>Low Tier 1</span>
            </div>

            <div class="tier tier-ht2">
                <b>HT2</b>
                <span>High Tier 2</span>
            </div>

            <div class="tier tier-lt2">
                <b>LT2</b>
                <span>Low Tier 2</span>
            </div>

            <div class="tier tier-ht3">
                <b>HT3</b>
                <span>High Tier 3</span>
            </div>

            <div class="tier tier-lt3">
                <b>LT3</b>
                <span>Low Tier 3</span>
            </div>

            <div class="tier tier-ht4">
                <b>HT4</b>
                <span>High Tier 4</span>
            </div>

            <div class="tier tier-lt4">
                <b>LT4</b>
                <span>Low Tier 4</span>
            </div>

            <div class="tier tier-ht5">
                <b>HT5</b>
                <span>High Tier 5</span>
            </div>

            <div class="tier tier-lt5">
                <b>LT5</b>
                <span>Low Tier 5</span>
            </div>

        </div>

    </section>

</main>


<footer>

    <div class="footer-logo">
        <span>V</span> VTiers
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