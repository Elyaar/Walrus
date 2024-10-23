<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
            <h2>Update Openingstijden</h2>
            <form action="update_openingstijden.php" method="POST">
                <label for="dag">Dag:</label>
                <select name="dag" id="dag">
                    <option value="Maandag">Maandag</option>
                    <option value="Dinsdag">Dinsdag</option>
                    <option value="Woensdag">Woensdag</option>
                    <option value="Donderdag">Donderdag</option>
                    <option value="Vrijdag">Vrijdag</option>
                    <option value="Zaterdag">Zaterdag</option>
                    <option value="Zondag">Zondag</option>
                </select>
                <br>
                <label for="openingsuur">openingsuur:</label>
                <input type="time" name="openingsuur" id="openingsuur" required>
                <br>
                <label for="sluitingsuur">sluitingsuur</label>
                <input type="time" name="sluitingsuur" id="sluitingsuur" required>
                <br>
                <input type="submit" value="update">
            </form>
        </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_de_walrus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dag = $_POST["dag"];
    $openingsuur = $_POST["openingsuur"];
    $sluitingsuur = $_POST["sluitingsuur"];

    $sql = "UPDATE openingstijden SET openingsuur='$openingsuur', sluitingsuur='$sluitingsuur' WHERE dag='$dag'";

    if ($conn->query($sql) === TRUE) {
        echo "Openingstijden succesvol güncellendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
