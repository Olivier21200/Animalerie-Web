<?php

//Création d’une classe Animal reprenant les attributs de la table « animaux » en bdd.
class Animal
{
    private  $_id;
    private  $_nom;
    private  $_espece;
    private  $_cri;
    private  $_proprietaire;
    private  $_age;

    //Constructeur de la classe animal
    public function __construct($id=null,  $nom=null,  $espece=null,  $cri=null,  $proprietaire=null,  $age=null)
    {
        $this->_id = $id;
        $this->_nom = $nom;
        $this->_espece = $espece;
        $this->_cri = $cri;
        $this->_proprietaire = $proprietaire;
        $this->_age = $age;
    }

    //ToString de la class Animal
    public function __toString() 
    {
        return " <ul>".
        "<li>id : <b>".$this->id().
        "</li><li></b>nom : <b>".$this->nom().
        "</li><li></b>espèce : <b>".$this->espece().
        "</li><li></b>cri : <b>".$this->cri().
        "</li><li></b>proprietaire : <b>".$this->proprietaire().
        "</li><li></b>age : <b>".$this->age()."</b>.</li></ul> ";
    }

    //Getter de l'id de l'animal
    public function  id() 
    {
        return $this->_id;
    }    

    //Getter du nom de l'animal
    public function nom() 
    {
        return $this->_nom;
    }    

    //Getter de l'espece de l'animal
    public function espece() 
    {
        return $this->_espece;
    }    

    //Getter du cri de l'animal
    public function cri() 
    {
        return $this->_cri;
    }    

    //Getter du proprietaire de l'animal
    public function proprietaire() 
    {
        return $this->_proprietaire;
    }    

    //Getter de l'age de l'animal
    public function age() 
    {
        return $this->_age;
    }
    
    ///////SETTERS//////

    //Setter de l'id de l'animal
    public function set_id($id) 
    {
        $this->_id = $id;
    }

    //Setter du nom de l'animal
    public function set_nom($nom) 
    {
        $this->_nom = $nom;
    }

    //Setter de l'espece de l'animal
    public function set_espece($espece) 
    {
        $this->_espece = $espece;
    }

    //Setter du cri de l'animal
    public function set_cri($cri) 
    {
        $this->_cri = $cri;
    }

    //Setter du proprietaire de l'animal
    public function set_proprietaire($proprietaire) 
    {
        $this->_proprietaire = $proprietaire;
    }

    //Setter de l'age de l'animal
    public function set_age($age) 
    {
        $this->_age = $age;
    }
    
    
    //Initialisation d’une instance à partir d’un tableau
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set_'.ucfirst($key);
            
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}


?>