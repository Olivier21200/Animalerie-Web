<?php 
   function supprimerPage() 
   {
      //link de fichier php
      require_once("../utility/Form.php");
      require_once("../main-class/AnimauxManager.php");
      require_once("../connexion_sql.php");

      $form = new Form("VueSupprimer.php"); //Création du formulaire de suppression.
      
      
      if (isset($_GET['id']))//On vérifie avec la methode get si la l'url contient un id
      {
         $_id=$_GET['id']; //On récupere l'id dans l'url
         $id = new Champ("ID de l'animal à supprimer", "id", "number", "$_id"); //Creation du champ de l'id de l'naimal avec la valeur de l'id de l'url
      }
      else
      {
         $id = new Champ("ID de l'animal à supprimer", "id", "number");//Creation du champ de l'id de l'naimal sans valeur
      } 
      
      $submit = new Champ("", "submit", "submit", "supprimer"); //Création du bouton d'envoie du formulaire
      
      //Ajouts des champs au formulaire
      $form->add($id);
      $form->add($submit);

      echo $form->__toString(); //Affichage du formulaire 

      if (isset($_POST['submit']))//On vérifie si une action est effectué sur le bouton supprimer du formulaire
      {
         if (isset($_POST['id']))  //On vérifie le champ de l'id de l'animal action est effectué sur le bouton ajout du formulaire
         {       
            $_id = $_POST['id'];
            
            if($manager->get($_id)) //On appel la fonction get de AnimauxManager pour verifier que l'id corresponds à un animal
            {
               //Affichage de la notiffication de success 
               echo "<p class='alert alert-success alert-dismissible fade show'>L'animal $_id a été supprimer.</p>";
            }
            
            $manager->remove($_id); //On appel la fonction remove de AnimauxManager      
         }
      }
   }
?>