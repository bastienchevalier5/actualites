    <a href="index.php"><img src="logo.png" alt="logo" title="logo"></a>
    <h1>ActuWorld</h1>
    <div class="menu">
        <a href="index.php">Acceuil</a>
        <label for="sport">Sport</label>
        <select name="sport" onchange="window.location.href=this.value">
            <?php
            require_once "classmenu.php";
            $menus = Menu::sous_menu1();
            if ($menus){
                foreach ($menus as $menu) {
            echo '<option value="#">'.($menu->nom).'</option>';
            }
        }
            ?>
        </select>
        <label for="actu">Actualités</label>
        <select name="actu" onchange="window.location.href=this.value">
            <?php
            require_once "classmenu.php";
            $menus = Menu::sous_menu2();
            if ($menus){
                foreach ($menus as $menu) {
            echo '<option value="#">'.($menu->nom).'</option>';
            }
        }
            ?>
        </select>

        <a href="">Lien 2</a>
        <a href="">Lien 3</a>
    </div>
