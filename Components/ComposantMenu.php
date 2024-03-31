<?php

namespace Components;

use Autoloader\Autoloader;
use Components\Interfaces\Affichable;
use Models\Menu;

Autoloader::register('Models/Menu');
Autoloader::register('Components/Interfaces/Affichable');

class ComposantMenu implements Affichable
{
    /**
     * @var array<Menu>
     */
    public $menus_racines;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->menus_racines = Menu::select('select * from menu where categorie_id is null');
    }

    /**
     * @return void
     */
    public function afficher()
    {
        echo '<ul class="navbar-nav">';
        foreach ($this->menus_racines as $menu) {
            if ($menu->has_menus_enfants()) {
                echo '<li class="nav-item dropdown">';
                echo '  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                echo $menu->nom;
                echo '  </a>';
                echo '  <ul class="dropdown-menu">';
                foreach ($menu->menus_enfants() as $menu_enfant) {
                    echo '    <li><a class="dropdown-item" href="page.php?id='.$menu_enfant->id.'">' . $menu_enfant->nom . '</a></li>';
                }
                echo '  </ul>';
                echo '</li>';
            } else {
                echo '<li class="nav-item"><a href="" class="nav-link">' . $menu->nom . '</a></li>';
            }
        }
        echo '</ul>';
    }
}
