<?php

$dsn = "mysql:host=localhost;dbname=walrus";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "je domme sukkel het werkt niet ga het fixen nu dan: " . $e->getMessage();
}
