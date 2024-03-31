<?php
use Autoloader\Autoloader;
use Components\ComposantMenu;
require_once 'Autoloader.php';
Autoloader::register('Components/ComposantMenu');
?>
    
    <a href="index.php"><img src="images/logo.png" alt="logo" title="logo"></a>
    <h1>ActuWorld</h1>
    <div class="menu">
    <?php
        $menu = new ComposantMenu();
        $menu->afficher();
    ?>

    <a href="adminmenu.php" style="color:white" >Administration</a>
    </div>
