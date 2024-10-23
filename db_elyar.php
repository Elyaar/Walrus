<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_de_walrus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Openingstijden table'ını oluşturun (sadece bir kez çalıştırın)
$sql = "CREATE TABLE IF NOT EXISTS openingstijden (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dag VARCHAR(20) NOT NULL,
    openingsuur TIME NOT NULL,
    sluitingsuur TIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table openingstijden created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// İlk değerleri ekleyin
$sql = "INSERT INTO openingstijden (dag, openingsuur, sluitingsuur) VALUES
        ('Maandag', '10:00', '23:00'),
        ('Dinsdag', '10:00', '23:00'),
        ('Woensdag', '10:00', '23:00'),
        ('Donderdag', '10:00', '23:00'),
        ('Vrijdag', '10:00', '23:00'),
        ('Zaterdag', '10:00', '23:00'),
        ('Zondag', '10:00', '23:00')";

if ($conn->query($sql) === TRUE) {
    echo "New openingstijden created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
