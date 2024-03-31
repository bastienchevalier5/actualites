<?php
use Autoloader\Autoloader;
use Models\Menu;
require_once 'Autoloader.php';
Autoloader::register('Models/Menu');
Menu::supp_categorie();
header("Location: adminmenu.php");
?>