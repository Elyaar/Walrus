<!DOCTYPE html>
<html lang="en">

<head>
  <
    <title>Reserveren</title>
    <link rel="stylesheet" href="reserveren.css">

</head>

<body>
  <?php //include 'header.php';

  ?>

  <div class="div-res">
    <h1 class="title-res">
      Niet stressen, gewoon je plek vastzetten!
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

    <div class="info-3">
      <img src="img/yeahtoch.JPEG" alt="foto" class=" foto-1">
    </div>
    <div class="info-4">
      <h2 class="story-1">
        <span class=" span-1">  Het verhaal van Wally's Welkom"</span>

        Er was eens een walrus genaamd Wally, de vriendelijkste gastheer die je ooit zou ontmoeten. Wally was dol op gezelschap en hield van het idee om vrienden samen te brengen voor een heerlijke maaltijd. Daarom opende hij een restaurant aan zee, waar iedereen welkom was om te genieten van goed eten en gezelligheid.

        Elke avond stond Wally bij de deur om gasten te begroeten, altijd met een brede glimlach en een warme knipoog. "Welkom bij Wally's," zei hij. "Ik heb al een tafeltje voor je klaarstaan. Voel je thuis!"

        Net zoals Wally altijd klaarstond voor zijn gasten, zorgen wij ervoor dat je je bij ons direct welkom voelt. Wil je ook genieten van een avond vol plezier en lekkernijen? Reserveer nu je tafel en laat Wally weten dat je onderweg bent. Wij zorgen voor de rest!
      </h2>
    </div>
  </div>


  </div>
  <button type="submit" class="btn-4">Reserveer</button>

  <h2>

    <h2>

      <?php //include 'footer.php';

      ?>
</body>

</html>