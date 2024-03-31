<?php
use Autoloader\Autoloader;
use Models\Menu;
require_once 'Autoloader.php';
Autoloader::register('Models/Menu');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <?php
        include "includes/header.php";
        ?>
    </header>
    <main style="display: flex;flex-direction: column;align-content: center;justify-content: center;align-items:center">
        <form action="" method="post">
            <input name="nom" type="text" placeholder="Nom">
            <input name="categorie_id" type="text" placeholder="categorie_id">
            <button type="submit">Ajouter</button>
        </form>
            <?php
                if (isset($_POST['nom'],$_POST['categorie_id'])){
                Menu::ajout_categorie();
            }
            

            ?>
        
        <table class="table table-bordered caption-top text-center">
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Id_catégorie</th>                    
                    <th scope='col'>Editer</th>
                    <th scope='col'>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $menus = Menu::select('SELECT * FROM menu');
                if ($menus){
                    foreach ($menus as $menu) {
                       echo "
                <tr>
                    <th scope='row'>".$menu->id."</th>
                    <td>".$menu->nom."</td>
                    <td>".$menu->categorie_id."</td>
                    <td><a href='menuedit.php?id=".$menu->id."'><img class='editsupp' src='images/crayon.jpg' alt='editer' title='editer'></a></td>
                    <td><a href='menusupp.php?id=".$menu->id."'><img class='editsupp' src='images/poubelle.jpg' alt='supprimer' title='supprimer'></a></td>
                </tr>"; 
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <?php
        include "includes/footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>