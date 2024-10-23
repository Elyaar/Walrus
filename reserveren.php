<!DOCTYPE html>
<html lang="en">

<head>

  <title>Reserveer</title>
  <link rel="stylesheet" href="reserveren.css">

</head>

<body>
  <?php include 'header.html';

  ?>


  <?php
  date_default_timezone_set('Europe/Amsterdam');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datum = $_POST['datum'];

    if (strtotime($datum) < time()) {
      echo "<div class='error'>U kunt geen reservering maken voor een datum in het verleden. Kies een andere datum.</div>";
    } else {
      $naam = $_POST['Naam'];
      $email = $_POST['E-mail'];

      echo "<div class='confirmation'>Bedankt voor uw reservering, $naam! We hebben een bevestiging gestuurd naar $email</div>";
      // Code komt hier later
    }
  }
  ?>


  <div class="div-res">
    <h1 class="title-res">
      Welkom, We staan klaar om u te helpen.
    </h1>
  </div>

  <h2 class="t-2">Reserveer nu ook online!</h2>
  <div class="rd-1">

    <div class="info-1">
      <form action="" method="POST">
        <div>
          <lable class="btn-2">Reserveer voor : </lable>
          <select name="type_reservering" required>
            <option value="">Kies een optie</option>
            <option value="tabel">Tafel</option>
            <option value="arrangement">Arrangement</option>
          </select>
        </div>


        <div class="Name-div"> <label for="Name" class="btn-1">
            Naam*:</label>
          <input type="text" class="input-1" placeholder="Naam" name="Naam" required>
        </div>


        <div>
          <label class="btn-1">E-mail*:</label>
          <input type="text" class="input-1" placeholder="E-mail" name="E-mail" required>
        </div>
        <div>
          <label for="Tel" class="btn-1">Tel*:</label>
          <input type="text" class="input-1" placeholder="Tel" name="Tel" required>

        </div>
        <div>
          <label class="btn-2">aantal*:</label>
          <input type="number" class="input-2" min="1" max="10" required>
        </div>
    </div>
    <div class="info-2">
      <div>
        <label for="Date" class="btn-2">Datum*: </label>
        <input type="date" class="input-2" required name="datum">
      </div>
      <div>
        <label for="tijd">Kies een tijd:</label>
        <input type="time" id="tijd" name="tijd" required>
      </div>

      <div>
        <label class="btn-2">Locatie: Leeuwarden</label>
        <input type="radio" name="locatie" value="Leeuwarden" class="input-2">
      </div>

      <div>
        <label class="btn-2">Locatie: Sneek</label>
        <input type="radio" name="locatie" value="Sneek" class="input-2">
      </div>

    </div>
    <img src="img/yeahtoch.JPEG" alt="foto" class=" foto-1">
  </div>

  <button type="submit" class="btn-4">Reserveer</button>
  </form>

  </div>
  <?php include 'footer.html';

  ?>
</body>

</html>