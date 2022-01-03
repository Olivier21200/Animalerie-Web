<?php
    session_start(); //Création d'une sesion pour stocker l'id de l'animal

    if (!isset($_SESSION['affichageid'])) 
	{
		$_SESSION['affichageid'] = "";
	} 
    else
    {
        if(isset($_GET['id']))
        {
            $_SESSION['affichageid'] = $_GET['id'];
        }
    }

    require_once("VueAnimal.php"); 
    require_once("utility/Form.php");
    require_once("main-class/Animal.php");
    require_once("main-class/AnimauxManager.php");
    require_once("connexion_sql.php");    

    $res2 = $manager->getList();

    if (isset($_GET['id']))
    {
        $animal1 = $manager->get($_GET['id']);       

        $form = new Form("modifier.php");
        $name = new Champ("Nom", "nom", "text", $animal1->nom());
        $espece = new Champ("Espece", "espece", "text", $animal1->espece());
        $cri = new Champ("Cri", "cri", "text", $animal1->cri());
        $proprietaire = new Champ("Proprietaire", "proprietaire", "text", $animal1->proprietaire());
        $age = new Champ("Age", "age", "number", $animal1->age());

        $submit = new Champ("", "submit", "submit", "Go!");
        
        $form->add($name);
        $form->add($espece);
        $form->add($cri);
        $form->add($proprietaire);
        $form->add($age);
        $form->add($submit);

        echo $form->__toString();        
    }
    



    if (isset($_POST['submit']))
    {       
       if (isset($_POST['nom']) || isset($_POST['espece']) ||  isset($_POST['cri']) || isset($_POST['proprietaire']) || isset($_POST['age']));  
       {       
          $name = $_POST['nom'];
          $espece = $_POST['espece'];
          $cri = $_POST['cri'];
          $proprietaire = $_POST['proprietaire'];
          $age = $_POST['age'];

          $A2 = new Animal($_SESSION['affichageid'], $name, $espece, $cri, $proprietaire, $age);

          $manager->update($A2);
       }
    }
    else
    {
       echo "Veuillez remplire un des champs afin de modifier un animal.";
    }
?>