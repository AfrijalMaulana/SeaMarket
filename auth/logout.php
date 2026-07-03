<?php
require_once '../config/app.php';
require_once '../config/session.php';

// Destroy session and redirect to login
$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}
session_destroy();

set_flash('success', 'Anda berhasil logout. Sampai jumpa kembali!');
header('Location: ' . BASE_URL . 'auth/login.php');
exit;
