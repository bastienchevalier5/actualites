<?php
namespace Models;

class Actualite extends Bdd
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $titre;

    /**
     * @var string
     */

    public $image;

    /**
     * @var string
     */
    public $contenu;

    /**
     * @var string
     */
    public $publication;

    /**
     * @var string
     */
    public $modification;

    /**
     * @var string
     */
    public $auteur;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $source;


    public function __construct($listes)
    {
        $this->id = $listes["id"];
        $this->titre = $listes['titre'];
        $this->image = $listes['image'];
        $this->contenu = $listes['contenu'];
        $this->publication = $listes['publication'];
        $this->modification = $listes['modification'];
        $this->auteur = $listes['auteur'];
        $this->tag = $listes['tag'];
        $this->source = $listes['source'];
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
            array_push($listes, new Actualite($row));
        }

        return $listes;
    }


    public function getId() :int{
        return $this-> id;
    }
    public function getTitre() :string{
        return $this-> titre;
    }

    public function getImage() :string{
        return $this-> image;
    }

    public function getContenu() :string{
        return $this-> contenu;
    }

    public function getPublication() :string{
        return $this-> publication;
    }

    public function getModification() :string{
        return $this-> modification;
    }

    public function getAuteur() :string{
        return $this-> auteur;
    }

    public function getTag() :string{
        return $this-> tag;
    }

    public function getSource() :string{
        return $this-> source;
    }


}
