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
        <p>
            <?php $name = $_POST["name"];
            echo $name;
            ?>
        </p>
        <p><?php $email = $_POST["e-mail"];
            echo $email
            ?>
        </p>
        <p><?php $title = $_POST["title"];
            echo $title ?> </p>
        <p><?php $location = $_POST["Location"];
            echo $location ?> </p>
        <p><?php $feedback = $_POST["feedback"];
            echo $feedback ?></p>
        <hr>

        <form class="content" action="formhandeler.inc.php" method="post">
            <fieldset>
                <h2>Contact Formulier</h2>

                <label>Naam:</label>
                <input type="text" placeholder="Voer je naam in" name="name" value="my_name" required><br>
                <input type="submit" name="go" value="submit">

                <label for="email">E-mail:</label>
                <input type="email" placeholder="Voer je e-mail in" name="e-mail" value="e-mail" required><br>

                <label for="title">Onderwerp:</label>
                <input type="text" placeholder="Titel van je bericht" name="title" value="title" required><br>

                <p>Kies een locatie:</p>
                <input type="radio" name="Location" value="Sneek" checked> Sneek
                <input type="radio" name="Location" value="herenveen"> Heerenveen

                <label for="feedback">Feedback:</label>
                <textarea placeholder="Schrijf je feedback hier" rows="4" name="feedback" required></textarea><br>
                <button type="submit"><a href="./hoome.php">verzenden</a></button>

            </fieldset>
        </form>
        <hr>
    </div>

    <?php include 'footer.php';

    ?>
</body>

</html>