<?php
class Menu {
    public $id;
    public $nom;
    public $categorie_id;

    public static function sous_menu1() {
        require_once "PDO.php";

        $options = array();

        $sql = 'SELECT * FROM menu WHERE categorie_id=1';
        $temp = connect::getPDO()->query($sql);

        while ($resultats = $temp->fetch()) {
            $options[] = new Menu($resultats);
        }

        return $options;
    }

    public static function sous_menu2() {
        require_once "PDO.php";

        $options = array();

        $sql = 'SELECT * FROM menu WHERE categorie_id=4';
        $temp = connect::getPDO()->query($sql);

        while ($resultats = $temp->fetch()) {
            $options[] = new Menu($resultats);
        }

        return $options;
    }

    public function __construct(array $resultats) {
        $this->id = $resultats['id'];
        $this->nom = $resultats['nom']; 
        $this->categorie_id = $resultats['categorie_id'];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getCategorie_id(): int {
        return $this->categorie_id;
    }
}