<?php
/**
 * session.php – Session initialization for SeaMarket.
 * Include this file before any output on pages that require session.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_name('seamarket_session');
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => false, // set true on HTTPS
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

/**
 * Set a flash message to be shown once on next page load.
 */
function set_flash(string $type, string $message): void {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

/**
 * Get and clear the flash message.
 */
function get_flash(): ?array {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

/**
 * Check if user is logged in, redirect to login if not.
 */
function require_login(string $redirect = '/seamarket/auth/login.php'): void {
    if (empty($_SESSION['user_id'])) {
        header('Location: ' . $redirect);
        exit;
    }
}

/**
 * Check if user has required role.
 */
function require_role(string $role): void {
    require_login();
    if (($_SESSION['user_role'] ?? '') !== $role) {
        header('Location: /seamarket/index.php');
        exit;
    }
}

/**
 * Check if user is already logged in (redirect dashboard if so).
 */
function redirect_if_logged_in(): void {
    if (!empty($_SESSION['user_id'])) {
        $role = $_SESSION['user_role'] ?? 'customer';
        header("Location: /seamarket/{$role}/dashboard.php");
        exit;
    }
}
