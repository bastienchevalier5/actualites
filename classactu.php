<?php
class Actualite extends connect
{
    public $id;
    public $titre;
    public $image;
    public $contenu;
    public $publication;
    public $modification;
    public $auteur;
    public $tag;
    public $source;
    public static function index(){
        require_once "PDO.php";
        $sql = 'SELECT * FROM actualités ORDER BY publication LIMIT 5';
        $temp = connect::getPDO()->query($sql);
        
        $actualites = array(); // Initialize an array to store Actualite objects
        
        while ($resultats = $temp->fetch()){
            $actualites[] = new Actualite($resultats); // Store each Actualite object in the array
        }
        
        return $actualites; // Return the array containing all fetched Actualite objects
    }
    
    public static function actu($id){
        require_once "PDO.php";
        $sql = 'SELECT * FROM actualités WHERE id='.$id;
        $temp = connect::getPDO()->query($sql);
        $resultats = $temp->fetch();
        
        if ($resultats) {
            return new Actualite($resultats); // Return the Actualite object if found
        } else {
            return null; // Return null if no result found
        }
    }
    
    public function __construct(array $resultats)
{

    // Merge provided array with defaults to handle missing keys gracefully
    $resultats = array_merge($resultats);

    // Assign values to object properties
    $this->id = $resultats["id"];
    $this->titre = $resultats['titre'];
    $this->image = $resultats['image'];
    $this->contenu = $resultats['contenu'];
    $this->publication = $resultats['publication'];
    $this->modification = $resultats['modification'];
    $this->auteur = $resultats['auteur'];
    $this->tag = $resultats['tag'];
    $this->source = $resultats['source'];
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