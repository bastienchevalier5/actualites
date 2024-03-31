<?php
use Autoloader\Autoloader;
use Models\Contact;
require_once 'Autoloader.php';
Autoloader::register('Models/Contact');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
        include "includes/header.php";
        ?>
    </header>
    <main>
        <form class="contact" action="contact.php" method="post">
            <h2>Un problème? Contactez-nous</h2>
            <label for="nom">Votre nom</label>
            <input name="nom" type="text">
            <label for="prenom">Votre prénom</label>
            <input name="prenom" type="text">
            <label for="mail">Votre mail</label>
            <input name="mail" type="email">
            <button type="submit">Envoyer</button>
        </form>
        <?php
        if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"])) {
            Contact::nouveau_contact();
            header("Location: index.php?message=informations_enregistrees");
        }
        ?>
    </main>
    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>