<?php
include "PDO.php";
if(isset($_GET['message']) && $_GET['message'] == "informations_enregistrees") {
    echo "<h3 class='validation'>Vos informations ont été enregistrées avec succès.</h3>";
}

require_once "classactu.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <main>
        <?php
        $actualites = Actualite::index();
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
        include("footer.php");
        ?>
    </footer>
</body>
</html>