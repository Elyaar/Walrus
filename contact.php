<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page - De Café Walrus</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php include 'header.php';

    ?>

    <div class="content">
        <h2>Hoe kunnen wij jou helpen?</h2>
        <h3>Neem contact met ons op</h3>
        <p>Bel ons: 0515438100 voor Sneek locatie of 0582137740 voor Heerenveen locatie</p>
        <hr>

        <div class="content">
            <fieldset>
                <h2>Contact Formulier</h2>

                <label>Naam:</label>
                <input type="text" placeholder="Voer je naam in" required><br>

                <label for="email">E-mail:</label>
                <input type="email" placeholder="Voer je e-mail in" required><br>

                <label for="title">Onderwerp:</label>
                <input type="text" placeholder="Titel van je bericht" required><br>

                <p>Kies een locatie:</p>
                <input type="radio" checked> Sneek
                <input type="radio"> Heerenveen

                <label for="feedback">Feedback:</label>
                <textarea placeholder="Schrijf je feedback hier" rows="4" required></textarea><br>
                <button type="submit"><a href="./hoome.php">verzenden</a></button>

            </fieldset>
        </div>
        <hr>
    </div>

    <?php include 'footer.php';

    ?>
</body>

</html>