<?php
define("DB_USER", "dev");
define("DB_PASS", "Senatedevdb34!.");
define("DB_DB", "acadsen");
define("DB_HOST", "localhost");
//require_once '/var/www/html/rsenatedev/vendor/autoload.php';
$db = new MysqliDb(DB_HOST, DB_USER, DB_PASS, DB_DB);





?>
