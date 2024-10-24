<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>De Walrus</title>
</head>

<body>
  <main>
    <div id="home_content_top">
      <img id="KO" src="img/walrus1.png" alt="foto1">
      <div id="korte_omschrijving">
        <h1>Ontspan, geniet en ontmoet</h1>
        <p>
          Zo, jij hebt smaak! Je bent namelijk beland op de website van Grand-Café De Walrus,
          de één-na-leukste plek in de omgeving Leeuwarden en Sneek. Wat zijn dan de leukste
          plekken? Nou, onze daadwerkelijke Grand-Café’s natuurlijk!
          <br><br>
          Beide restaurants zijn gevestigd in een groots sfeervol pand, op een prachtige locatie in
          het centrum. Dé ideale plek voor een lekkere kop koffie, uitgebreide lunch, een heerlijk
          diner en een gezellige borrel. Dus kom tot rust in de gezelligste drukte van Noord
          Nederland. Of doe er juist een schepje bovenop en spring zelf op de tafel.
          <br><br>
          Kom langs of <a href="reserveren.php">reserveer</a> bij één van onze restaurants en ervaar het zelf!
        </p>
      </div>
    </div>
    <div id="home_content_bottom">
      <img id="OT1" src="img/walrus2.png" alt="foto2">
      <div id="openingstijden">
        <h1>Openingstijden</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cafe_de_walrus";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM openingstijden";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo $row["dag"] . ": " . $row["openingsuur"] . " - " . $row["sluitingsuur"] . "<br>" . "<br>";
          }
        } else {
          echo "0 results";
        }

        $conn->close();
        ?>
      </div>
      <img id="OT2" src="img/walrus3.png" alt="foto3">
    </div>
  </main>
</body>

</html>