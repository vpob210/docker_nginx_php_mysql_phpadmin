<?php



$user = 'root';
$pass = 'root';

$dsn = 'mysql:host=my_sql;dbname=information_schema;charset=utf8'; // params for connection to DB
$pdo = new PDO($dsn, $user, $pass); // create object for DataBase connection

$stmt = $pdo->query('select * from tables'); // select info from DB
$row = $stmt->fetch(); // save first line into $row

print_r($row);
