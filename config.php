<?php

//configuração de bd

define('DB_DSN', 'sqlite:' . __DIR__ . '/database.db');
define('DB_USER', null);
define('DB_PASS', null);

// USO LOCAL

// define("DB_DSN", "mysql:host=localhost;dbname=polls;charset=utf8mb4");
// define("DB_USER", "root");
// define("DB_PASS", "");

//cookies para a votação
define("VOTE_COOKIE_DAYS", 30);




?>
