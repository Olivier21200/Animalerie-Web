<?php

    if (!isset($_SESSION['affichageid']))  //On vérifie si la variable de session a déja déclaré 
	{
		$_SESSION['affichageid'] = ""; //on déclare une variable de session vide
	} 
    else
    {
        if(isset($_GET['id'])) //On récupere l'id dans l'url avec la methode get
        {
            $_SESSION['affichageid'] = $_GET['id']; //on affecte a la variable de session l'id contenue dans l'url
        }
    }
    
    //link de fichier php
    include ("connexion_sql.php"); //Pour récupéré l'objet pdo de notre conection a notre base de données
    require_once("VueAnimal.php"); 
    require_once("utility/Form.php");
    require_once("main-class/Animal.php");
    require_once("main-class/AnimauxManager.php");    


    if (isset($_GET['id'])) //On vérifie dans l'url si il y a un id
    {
        $animal1 = $manager->get($_GET['id']);   //On appel la fonction get de Animaux Manager et oin recupere cette animal avec l'id     

        $form = new Form("VueModifier.php");

        $name = new Champ("Nom", "nom", "text", $animal1->nom()); //Création du champ du nom de l'animal avec la valeur de $animal1
        $espece = new Champ("Espece", "espece", "text", $animal1->espece());//Création du champ du espece de l'animal avec la valeur de $animal1
        $cri = new Champ("Cri", "cri", "text", $animal1->cri()); //Création du champ du cri de l'animal avec la valeur de $animal1
        $proprietaire = new Champ("Proprietaire", "proprietaire", "text", $animal1->proprietaire()); //Création du champ du proprietaire de l'animal avec la valeur de $animal1
        $age = new Champ("Age", "age", "number", $animal1->age()); //Création du champ de l'age de l'animal avec la valeur de $animal1

        $submit = new Champ("", "submit", "submit", "modifier"); //Création du bouton d'encoie du formulaire
         
        //Ajouts des champs au formulaire
        $form->add($name);
        $form->add($espece);
        $form->add($cri);
        $form->add($proprietaire);
        $form->add($age);
        $form->add($submit);

        echo $form->__toString(); //Affichage du formulaire            
    }
    

    if (isset($_POST['submit'])) //On vérifie si une action est effectué sur le bouton modifier du formulaire
    {       
       //On vérifie qu'au moins un des champs du formulaire a été rempli.
       if (isset($_POST['nom']) || isset($_POST['espece']) ||  isset($_POST['cri']) || isset($_POST['proprietaire']) || isset($_POST['age']));  
       {      
          //on récupère les informations des differants champs du formulaire  
          $name = $_POST['nom'];
          $espece = $_POST['espece'];
          $cri = $_POST['cri'];
          $proprietaire = $_POST['proprietaire'];
          $age = $_POST['age'];

          $A2 = new Animal($_SESSION['affichageid'], $name, $espece, $cri, $proprietaire, $age); //on créer un animal avec ces informations

          $manager->update($A2);//On appel la fonction update de AnimauxManager pour mettre a jour les inforamtion de l'animal
       }
    }
    else
    {
        //Affichage de la notiffication d'information
       echo "<p class='alert alert-info alert-dismissible fade show'>Veuillez remplire un des champs afin de modifier un animal.</p>";
    }

?>