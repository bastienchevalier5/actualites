<?php
include "PDO.php";

class Contact
{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(string $nom, string $prenom, string $mail){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
    }

    public function getNom() :string{
        return $this->nom;
    }

    public function getPrenom() :string{
        return $this->prenom;
    }
    public function getMail() :string{
        return $this->mail;
    }
}
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
            $contact = new Contact($_POST['nom'], $_POST['prenom'], $_POST['mail']);
            $prenom = $contact->getPrenom();
            $nom = $contact->getNom();
            $mail = $contact->getMail();
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