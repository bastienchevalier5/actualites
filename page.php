<?php
use Autoloader\Autoloader;
use Models\Page;
require_once 'Autoloader.php';
Autoloader::register('Models/Page');

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
        $page = Page::select('SELECT * FROM pages WHERE id='.$id);

        if ($page) {
            foreach ($page as $page){
            // Afficher les détails de l'actualité
            echo "<div class='carte_actu'>";
            echo "<h2>" . $page->getTitre() . "</h2>"; // Utilisation des méthodes de l'objet Actualite pour accéder aux propriétés
            echo "<img src='" . $page->getImage() . "'>";
            echo "<p>".$page->getContenu()."</p>";
            echo "<p>Publié le: " . $page->getPublication() . "</p>";
            echo "<p>Tag: " . $page->getTag() . "</p>";
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