<?php
namespace Models;

class Page extends Bdd
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $categorie;

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
    public $titre;

    /**
     * @var string
     */
    public $tag;


    public function __construct($listes)
    {
        $this->id = $listes["id"];
        $this->titre = $listes['titre'];
        $this->image = $listes['image'];
        $this->contenu = $listes['contenu'];
        $this->publication = $listes['publication'];
        $this->tag = $listes['tags'];
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
            array_push($listes, new Page($row));
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

    public function getTag() :string{
        return $this-> tag;
    }


}
