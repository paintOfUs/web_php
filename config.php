<?php
// file config.php
define('BASE_URL', 'http://localhost:8080/WebComic/');
define('CONTROLLER_PATH', __DIR__ . '/controller/');
define('MODEL_PATH', __DIR__ . '/model/');
define('DAO_PATH', __DIR__ . '/DAO/');
define('DB_PATH', __DIR__ . '/Database/');
define('VIEW_PATH', __DIR__ . '/');

// Chạy file controller đầu tiên
require_once CONTROLLER_PATH . 'homeController.php'
?>