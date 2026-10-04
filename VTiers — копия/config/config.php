<?php

session_start();

define('SITE_NAME', 'VTiers');

define('BASE_URL', '/VTiers');

define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', '123456');

function isAdmin(): bool
{
    return isset($_SESSION['admin_logged_in'])
        && $_SESSION['admin_logged_in'] === true;
}

function requireAdmin(): void
{
    if (!isAdmin()) {
        header('Location: ' . BASE_URL . '/pages/admin/login.php');
        exit;
    }
}