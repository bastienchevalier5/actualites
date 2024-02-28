<?php
include("PDO.php");
$sql = 'SELECT * FROM actualités ORDER BY publication LIMIT 5';
$temp = $pdo->query($sql);
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
        while ($resultats = $temp -> fetch()) {
        echo "<div class='carte_actu'>";
        echo "<h3>".$resultats['titre']."</h3>";
        echo "<img src='".$resultats['image']."' alt='image' title='image'>";
        echo "<p>Date de publication : ".$resultats['publication']."</p>";
        echo "<p>Date de modification : ".$resultats["modification"]."</p>";
        echo "<p>Auteur : ".$resultats["auteur"]."</p>";
        echo "<p>Tags : ".$resultats["tag"]."</p>";
        echo "</div>";
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