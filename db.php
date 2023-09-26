<?php
include_once('helpers/Log.php');
$host = 'localhost';
$db   = 'TMPT_db';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    $db = new \PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    new Log($e);
}