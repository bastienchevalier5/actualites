<?php
use Autoloader\Autoloader;
use Models\Actualite;
require_once 'Autoloader.php';
Autoloader::register('Models/Actualite');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualité</title>
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
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $actualite = Actualite::select('SELECT * FROM actualités WHERE id='.$id);

        if ($actualite) {
            foreach ($actualite as $actualite){
            // Afficher les détails de l'actualité
            echo "<div class='carte_actu'>";
            echo "<h2>" . $actualite->getTitre() . "</h2>"; // Utilisation des méthodes de l'objet Actualite pour accéder aux propriétés
            echo "<img src='" . $actualite->getImage() . "'>";
            echo "<p>".$actualite->getContenu()."</p>";
            echo "<p>Publié le: " . $actualite->getPublication() . "</p>";
            echo "<p>Modifié le: " . $actualite->getModification() . "</p>";
            echo "<p> Auteur: " . $actualite->getAuteur() . "</p>";
            echo "<p>Tag: " . $actualite->getTag() . "</p>";
            echo "<p>Source: <a href='".$actualite->getSource()."'>" . $actualite->getSource() . "</a></p>";
            echo "</div>";
        }
        }

        ?>
    </main>
    <footer>
        <?php
        include "includes/footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>