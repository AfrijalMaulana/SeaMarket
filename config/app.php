<?php
/**
 * app.php – Global application constants for SeaMarket.
 * Include this file FIRST before header.php on every page.
 */

// Base URL (change if deployed to a different path)
define('BASE_URL', '/seamarket/');
define('APP_NAME', 'SeaMarket');
define('APP_VERSION', '1.0.0');

// Upload paths
define('UPLOAD_PRODUCTS', BASE_URL . 'uploads/products/');
define('UPLOAD_PROFILES', BASE_URL . 'uploads/profiles/');

// Assets path
define('ASSETS_URL', BASE_URL . 'assets/');
