<?php 
    function ajoutPage() 
    {
        //link de fichier php
        require_once("../utility/Form.php");
        require_once("../main-class/Animal.php");
        require_once("../main-class/AnimauxManager.php");
        require_once("../connexion_sql.php");

        $form = new Form("VueAjout.php"); //Création du formulaire d'ajout
        $name = new Champ("Nom de l'animal", "nom", "text"); //Creation du champ du nom de l'animal
        $espece = new Champ("Espece de l'animal", "espece", "text"); //Creation du champ de l'espece de l'animal
        $cri = new Champ("Cri de l'animal", "cri", "text"); //Creation du champ du cri de l'animal
        $proprietaire = new Champ("Proprietaire de l'animal", "proprietaire", "text"); //Creation du champ du proprietaire de l'animal
        $age = new Champ("Age de l'animal", "age", "number"); //Creation du champ de l'age de l'animal

        $submit = new Champ("", "submit", "submit", "Ajouter !"); //Création du bouton d'envoie du formulaire
        
        //Ajouts des champs au formulaire
        $form->add($name);
        $form->add($espece);
        $form->add($cri);
        $form->add($proprietaire);
        $form->add($age);
        $form->add($submit);

        echo $form->__toString(); //Affichage du formulaire   
        
        if (isset($_POST['submit'])) //On vérifie si une action est effectué sur le bouton ajout du formulaire
        {   //On vérifie que tous les champs ont été remplis. 
            if (isset($_POST['nom']) && isset($_POST['espece']) &&  isset($_POST['cri']) && isset($_POST['proprietaire']) && isset($_POST['age']));  
            {       
                $name = $_POST['nom'];
                $espece = $_POST['espece'];
                $cri = $_POST['cri'];
                $proprietaire = $_POST['proprietaire'];
                $age = $_POST['age'];

                $A2 = new Animal(1,$name,$espece,$cri,$proprietaire,$age); //Création d'un animal avec les valeur récupéré dans les champs du formulaire

                $manager->add($A2); //Ajout de l'animal dans la liste des animaux et dans la bdd.
                //Affichage de la notiffication de success
                echo "<p class='alert alert-success alert-dismissible fade show'> L'animal $name a bien été ajouter à la liste.</p>";
                
            }
        }
        else
        {
            //Affichage de la notiffication de d'information
            echo "<p class='alert alert-info alert-dismissible fade show'> Veuillez remplire tout les champs afin d'ajouter un animal à la liste.</p>";
        }   
    }         
?>





          