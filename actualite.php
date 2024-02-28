<?php
include "PDO.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
$sql = 'SELECT * FROM actualités WHERE id ='.$id;
$temp = $pdo->query($sql);
$resultats = $temp->fetch();
}
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
        echo "<div class='detail'>";
        echo "<h2>".$resultats['titre']."</h2>";
        echo "<img src='".$resultats['image']."' alt='image' title='image'>";
        echo "<p>".$resultats["contenu"]."</p>";
        echo "<p>Date de publication : ".$resultats['publication']."</p>";
        echo "<p>Date de modification : ".$resultats["modification"]."</p>";
        echo "<p>Auteur : ".$resultats["auteur"]."</p>";
        echo "<p>Tags : ".$resultats["tag"]."</p>";
        echo "<a href='https://imgupscaler.com/fr'>".$resultats["source"]."</a>";
        echo "</div>";
        ?>
    </main>
    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
</body>
</html>