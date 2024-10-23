<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page - De Café Walrus</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php include 'header.html';
    ?>

    <div class="content-2">
        <h2>Hoe kunnen wij jou helpen?</h2>
        <h3>Neem contact met ons op</h3>
        <p>Bel ons: 0515438100 voor Sneek locatie of 0582137740 voor leeuwarden locatie</p>
        <p>
        <form class="content" action="formhandeler.inc.php" method="post">
            <fieldset>
                <h2>Contact Formulier</h2>
                <label>Naam:</label>
                <input type="text" placeholder="Voer je naam in" name="name" value=" " class="input-2" required><br>
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Voer je e-mail in" name="e-mail" value=" " class="input-2" required><br>
                <label for="title">Onderwerp:</label>
                <input type="text" placeholder="Titel van je bericht" name="title" value=" " class="input-2" required><br>



                <p>Kies een locatie:</p>
                <input class="radio_location" type="radio" name="Location" value="Sneek" checked> Sneek
                <input class="radio_location" type="radio" name="Location" value="leeuwarden"> Leeuwarden




                <label for="feedback">Feedback:</label>
                <textarea placeholder="Schrijf je feedback hier" rows="4" name="feedback" class="input-2" required></textarea><br>
                <input class="submit_input" type="submit" name="go" value="submit">
            </fieldset>
        </form>
        <hr>
    </div>
    <?php include 'footer.html';

    ?>
</body>

</html>