<?php
include "PDO.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualité</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
        include "header.php";
        ?>
    </header>
    <main>
        <?php
        if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

require_once "classactu.php";

// Fetch the actualité based on the provided ID
$actualite = Actualite::actu($id);

if ($actualite) {
    // Display the actualité details
    echo "<div class='carte_actu'>";
    echo "<h2>" . $actualite->getTitre() . "</h2>";
    echo "<img src='" . $actualite->getImage() . "'>";
    echo "<p>".$actualite->getContenu()."</p>";
    echo "<p>Publié le: " . $actualite->getPublication() . "</p>";
    echo "<p>Modifié le: " . $actualite->getModification() . "</p>";
    echo "<p> Auteur: " . $actualite->getAuteur() . "</p>";
    echo "<p>Tag: " . $actualite->getTag() . "</p>";
    echo "<p>Source: " . $actualite->getSource() . "</p>";
    echo "</div>";
}

        ?>
    </main>
    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
</body>
</html>