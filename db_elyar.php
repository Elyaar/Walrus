<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_de_walrus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO openingstijden (dag, openingsuur, sluitingsuur) VALUES
        ('Maandag', '10:00:00', '23:00:00'),
        ('Dinsdag', '10:00:00', '23:00:00'),
        ('Woensdag', '10:00:00', '23:00:00'),
        ('Donderdag', '10:00:00', '23:00:00'),
        ('Vrijdag', '10:00:00', '23:00:00'),
        ('Zaterdag', '10:00:00', '23:00:00'),
        ('Zondag', '10:00:00', '23:00:00');";

if ($conn->query($sql) === TRUE) {
    echo "New openingstijden created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>