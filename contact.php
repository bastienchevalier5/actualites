<?php
include "PDO.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
        include("header.php");
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
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $sql = "INSERT INTO contact (nom, prenom, mail) VALUES ('$nom', '$prenom', '$mail')";
            $pdo->exec($sql);
            header("Location: index.php?message=informations_enregistrees");
        }
        ?>
    </main>
    <footer>
        <?php
        include("footer.php");
        ?>
    </footer>
</body>
</html>