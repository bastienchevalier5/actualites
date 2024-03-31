<?php

namespace Models;

use Autoloader\Autoloader;
require_once "Bdd.php";
Autoloader::register('Models/Bdd');

class Menu extends Bdd
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nom;
    /**
     * @var string
     */
    public $categorie_id;

    /**
     * @param array $values
     * @return void
     */
    public function __construct(array $values)
    {
        $this->id = $values['id'];
        $this->nom = $values['nom'];
        $this->categorie_id = $values['categorie_id'];
    }

    /**
     * @param string $query
     * @return array
     */
    public static function select(string $query)
    {
        $rows = parent::select($query);

        $listes = [];

        foreach ($rows as $row) {
            array_push($listes, new Menu($row));
        }

        return $listes;
    }

    /**
     * @return bool
     */
    public function has_menus_enfants(): bool
    {
        $sql = 'select * from menu where categorie_id =' . $this->id;
        $count = parent::getPdo()->query($sql)->fetch();

        return $count > 0;
    }

    /**
     * @return array
     */
    public function menus_enfants(): array
    {
        $sql = 'select * from menu where categorie_id = ' . $this->id;

        return Menu::select($sql);
    }

    public static function ajout_categorie(){
        $nom = $_POST['nom'];
        $categorie_id = $_POST['categorie_id'];
        $sql = 'INSERT INTO menu (nom,categorie_id) VALUES ("'.$nom.'",'.$categorie_id.')';
        Bdd::select($sql);
    }
    public static function supp_categorie(){
        $id = $_GET['id'];
        $sql = 'DELETE FROM menu WHERE id='.$id;
        Bdd::select($sql);
    }

    public static function edit_categorie(){
        $id = $_GET['id'];
        $nom = $_POST['nom'];
        $categorie_id = $_POST['categorie_id'];
        $sql = 'UPDATE `menu` SET `nom` = "'.$nom.'" , `categorie_id`= "'.$categorie_id.'" WHERE `menu`.`id` ='.$id;
        ;
        Bdd::select($sql);
    }
}
    
