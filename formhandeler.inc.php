<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $pwd = $_POST["e-mail"];
    $title_2 = $_POST["title"];
    $loc = $_POST["Location"];
    $feed = $_POST["feedback"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO contact_pagina (username, email, onderwerp, locatie, feedback) VALUES
        (?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $title_2, $loc, $feed]);

        $pdo = null;
        $stmt = null;

        header("Location: hoome.php");

        die();
    } catch (PDOException $e) {
        die("i died: " .    $e->getMessage());
    }
} else {
    header("Location: hoome.php");
}
