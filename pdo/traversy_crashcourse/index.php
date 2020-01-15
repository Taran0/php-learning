<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdoposts';

// set DSN
$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;

// create a pdo instance
$pdo = new PDO($dsn, $user, $password);

// prdo query
$stmt = $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['title'] . '<br>';
}