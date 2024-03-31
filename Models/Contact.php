<?php

namespace Models;
class Contact extends Bdd
{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(array $values){
        $this->nom = $values['nom'];
        $this->prenom = $values['prenom'];
        $this->mail = $values["mail"];
    }

    public static function nouveau_contact(){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $sql = 'INSERT INTO contact (nom,prenom,mail) VALUES ("'.$nom.'","'.$prenom.'" , "'.$mail.'")';
        Bdd::select($sql);
    }
}
?>