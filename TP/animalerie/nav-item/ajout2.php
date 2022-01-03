<?php 
    function ajoutPage() 
    {
        require_once("../utility/Form.php");
        require_once("../main-class/Animal.php");
        require_once("../main-class/AnimauxManager.php");
        require_once("../connexion_sql.php");

        $form = new Form("VueAjout.php");
        $name = new Champ("Nom de l'animal", "nom", "text");
        $espece = new Champ("Espece de l'animal", "espece", "text");
        $cri = new Champ("Cri de l'animal", "cri", "text");
        $proprietaire = new Champ("Proprietaire de l'animal", "proprietaire", "text");
        $age = new Champ("Age de l'animal", "age", "number");

        $submit = new Champ("", "submit", "submit", "Ajouter !");
        
        $form->add($name);
        $form->add($espece);
        $form->add($cri);
        $form->add($proprietaire);
        $form->add($age);
        $form->add($submit);

        echo $form->__toString();    
        
        if (isset($_POST['submit'])) 
        {       
            if (isset($_POST['nom']) && isset($_POST['espece']) &&  isset($_POST['cri']) && isset($_POST['proprietaire']) && isset($_POST['age']));  
            {       
                $name = $_POST['nom'];
                $espece = $_POST['espece'];
                $cri = $_POST['cri'];
                $proprietaire = $_POST['proprietaire'];
                $age = $_POST['age'];

                $A2 = new Animal(1,$name,$espece,$cri,$proprietaire,$age);

                $manager->add($A2);
                echo "<p class='alert alert-success alert-dismissible fade show'> L'animal $name a bien été ajouter à la liste.</p>";
                
            }
        }
        else
        {
            echo "<p class='alert alert-info alert-dismissible fade show'> Veuillez remplire tout les champs afin d'ajouter un animal.</p>";
        }   
    }         
?>





          