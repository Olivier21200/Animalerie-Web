<?php 
   function supprimerPage() 
   {
      require_once("../utility/Form.php");
      require_once("../main-class/AnimauxManager.php");
      require_once("../connexion_sql.php");


      $form = new Form("VueSupprimer.php");
      
      if (isset($_GET['id']))
      {
         $_id=$_GET['id'];
         $id = new Champ("ID de l'animal à supprimer", "id", "number", "$_id");
      }
      else
      {
         $id = new Champ("ID de l'animal à supprimer", "id", "number");
      } 
      
      $submit = new Champ("", "submit", "submit", "supprimer");
      
      $form->add($id);
      $form->add($submit);

      echo $form->__toString();

      if (isset($_POST['id']))  
      {       
         $_id = $_POST['id'];
         
         if($manager->get($_id))
         {
            echo "<p>L'animal $_id a été supprimer.</p>";
         }
         
         $manager->remove($_id);

        
               
      }
   }
?>