<?php
session_start();
define('easy-code.ro', true);

spl_autoload_register(function ($class) {
    include 'inc/' . $class . '.easycode.php';
    echo '
    <script src="/assets/js/antiprosti.js"></script>';
});

Config::init()->getContent();
?>
