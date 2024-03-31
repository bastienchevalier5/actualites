<?php
use Autoloader\Autoloader;
use Models\Menu;
require_once 'Autoloader.php';
Autoloader::register('Models/Menu');
Autoloader::register('Components/ComposantMenu');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du menu</title>
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
        $values = Menu::select('SELECT * FROM menu WHERE id='.$_GET['id']);
        foreach ($values as $value){
        echo '
        <form action="" method="post">
            <input name="nom" type="text" value="'.$value->nom.'" placeholder="Nom">
            <input name="categorie_id" type="text" value="'.$value->categorie_id.'" placeholder = "Categorie_id">
            <button type="submit">Modifier</button>
        </form>';
        }
            if (isset($_POST['nom'],$_POST['categorie_id'])){
                Menu::edit_categorie();
                header("Location: adminmenu.php");
            }
        ?>
    </main>
    <footer>
        <?php
        include "includes/footer.php"
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>