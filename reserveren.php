<!DOCTYPE html>
<html lang="en">

<head>
  <
    <title>Reserveer</title>
    <link rel="stylesheet" href="reserveren.css">

</head>

<body>
  <?php include 'header.php';

  ?>

  <div class="div-res">
    <h1 class="title-res">
      Welkom, We staan klaar om u te helpen.
    </h1>
  </div>

  <!-- <div class="d-1"> <img src="img/yeahtoch.JPEG" alt="foto-man" class="p-1"></div> -->
  <h2 class="t-2">Reserveer nu ook online!</h2>
  <div class="rd-1">


    <div class="info-1">

      <div class="Name-div"> <label for="Name" class="btn-1">Naam*:</label>
        <input type="text" class="input-1" placeholder="Naam">
      </div>

      <div>
        <label class="btn-1">E-mail*:</label>
        <input type="text" class="input-1" placeholder="Email">
      </div>
      <div>
        <label for="Tel" class="btn-1">Tel*:</label>
        <input type="text" class="input-1" placeholder="Tel">
      </div>
      <div>
        <label class="btn-2">aantal*:</label>
        <input type="number" class="input-2" min="1" max="10">

      </div>
    </div>


    <div class="info-2">
      <div>
        <label for="Date" class="btn-2">Datum*: </label>
        <input type="date" class="input-2">
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


  </div>
  <button type="submit" class="btn-4">Reserveer</button>

  <h2>

    <h2>

      <?php include 'footer.php';

      ?>
</body>

</html>