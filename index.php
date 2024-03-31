<?php
if(isset($_GET['message']) && $_GET['message'] == "informations_enregistrees") {
    echo "<h3 class='validation'>Vos informations ont été enregistrées avec succès.</h3>";
}

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
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
        include("includes/header.php");
        ?>
    </header>
    <main>
        <?php
        $actualites = Actualite::select('SELECT * FROM actualités LIMIT 5');
        if ($actualites){
            foreach ($actualites as $actualite) {
                echo "<a class='lien_actu' href='actualite.php?id=".($actualite->getId())."'>";
                echo "<div class='carte_actu'>";
                echo "<h2>".($actualite-> getTitre())."</h2>";
                echo "<img src='".($actualite-> getImage())."'>";
                echo "<p>Publié le: ".($actualite-> getPublication())."</p>";
                echo "<p>Modifié le: ".($actualite-> getModification())."</p>";
                echo "<p> Auteur: ".($actualite-> getAuteur())."</p>";
                echo "<p>Tag: ".($actualite-> getTag())."</p>";
                echo "</div>";
                echo "</a>";  
            }
            
        }
        
        
        ?>
    </main>
    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>
</body>
</html>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>
