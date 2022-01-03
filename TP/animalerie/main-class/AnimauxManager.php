<?php 

require_once("Animal.php");

class AnimauxManager 
{
    private $_pdo; // Instance de PDO.

    //Constructeur
    public function __construct(PDO $pdo) 
    {
      $this->_pdo=$pdo;
    }

    //Setter de la pdo
    public function setDb(PDO $pdo) 
    {
        $this->_pdo = $pdo;
    }

    //Getter de la db 
    public function pdo() 
    {
        return $this->_pdo;   
    }

    //Méthode permettant de récupérer un Animal (get($id)), venant de la bdd.
    public function get($id) 
    {
        $_id = (int) $id; //on force le type de id en int pour la requete sql

        // préparation de la requete de selection d'un animal à partir de son id
        $request = $this->pdo()->prepare("SELECT id, nom, espece, cri, proprietaire, age FROM animaux WHERE id=:id");

        $request->execute(['id' => $_id]); //on execute la requete select en spécifiant la valeur d'id

        $donnees = $request->fetch(PDO::FETCH_ASSOC); //Récupère une ligne depuis le jeu de résultats 
        
        $A1 = new Animal(); //création de mon animal sans valeur
        
        $A1->hydrate($donnees); //Utilisation de ma fonction hydrate pour set les valeur de mon objet $A1
        
        return $A1; //On return l'objet animal créer précédament avec les données de notre requete
    }

    //fonction qui ajoute un animal à la bdd
    public function add(Animal $animal)
    {
        $q = $this->pdo()->prepare('INSERT INTO animaux SET nom = :nom, espece = :espece, cri = :cri, proprietaire = :proprietaire, age = :age');
        
        $q->bindValue(':nom', $animal->nom(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':espece', $animal->espece(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':cri', $animal->cri(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':proprietaire', $animal->proprietaire(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':age', $animal->age(), PDO::PARAM_INT);
        
        $q->execute(); //On execute la requete d'ajout'
    }

    //fonction qui retourne la liste des animaux dans notre bdd
    public function getList()
    {
        $animal = array(); //Création d'un tableau 
        
        // préparation de la requete de selection de tout les animaux dnas la table animaux ordoner par leur id
        $q = $this->pdo()->prepare('SELECT id, nom, espece, cri, proprietaire, age FROM animaux ORDER BY id');
        
        $q->execute(); //execution de notre select *

        //on parcours le résultat de notre requete et on créer des objets afin de les stocker dans un tableau
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) 
        {
            $A1 = new Animal(); //création d'un objet animal
            $A1->hydrate($donnees); //Utilisation de ma fonction hydrate pour set les valeur de mon objet $A1
            $animal[] = $A1; //On stock notre objet dans notre tableau animaux
           
        }       
        
        return $animal; //On return le tableau d'animaux créer précédament avec les données de notre requete
    }

    //fonction qui updatel'animal sélectionner avec de nouvelle valeur
    public function update(Animal $animal) 
    {
        $q = $this->pdo()->prepare('UPDATE animaux SET nom = :nom, espece = :espece, cri = :cri, proprietaire = :proprietaire, age = :age WHERE id = :id');

        $q->bindValue(':nom', $animal->nom(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':espece', $animal->espece(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':cri', $animal->cri(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':proprietaire', $animal->proprietaire(), PDO::PARAM_STR_CHAR);
        $q->bindValue(':age', $animal->age(), PDO::PARAM_INT);
        $q->bindValue(':id', $animal->id(), PDO::PARAM_INT);

        $q->execute(); //on exécute notre requete de mise a jour
    }

    //Fonction permettant de récupérer des Animaux avecleurs nom depuis la bdd.
    public function find($name) 
    {
        $_nameAnimal = (string)$name; //on force le type du nom en string pour la requete sql

        $animalFound = array(); //Création d'un tableau avec les animaux trouvé 

        // préparation de la requete de recherche de tout les animaux avec le prenom passé en parametre dnas la table animaux ordoner par leur id
        $q = $this->pdo()->prepare('SELECT id, nom, espece, cri, proprietaire, age FROM animaux where nom LIKE :nom ORDER BY id');
        $q->bindValue(':nom', $name."%", PDO::PARAM_STR_CHAR);

        $q->execute(); //on execute la requete select en spécifiant la valeur d'id

         //on parcours le résultat de notre requete et on créer des objets afin de les stocker dans un tableau
         while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) 
         {
             $A1 = new Animal(); //création d'un objet animal
             $A1->hydrate($donnees); //Utilisation de ma fonction hydrate pour set les valeur de mon objet $A1
             $animalFound[] = $A1; //On stock notre objet dans notre tableau animaux
         }         
    
        return $animalFound; //On return l'objet animal créer précédament avec les données de notre requete   
    }

    //Fonction qui supprime un animal sélectionnée par son id 
    public function remove($id)
    {
        $_id = (int) $id; //on force le type de id en int pour la requete sql

        // préparation de la requete de supretion d'un animal à partir de son id
        $request = $this->pdo()->prepare("delete FROM animaux WHERE id=:id");

        $request->execute(['id' => $_id]); //on execute la requete select en spécifiant la valeur d'id

    }
}



?>

