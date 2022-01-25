<?php 
    require_once("main-class/AnimauxManager.php");

     //Variable de link avec la bdd
     $host = '';
     $dbname = '';
     $username = '';
     $password = '';
  
     try //test de conection a la bdd
     {
         $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
     }
     catch (PDOException $e)  //exception en cas de problème de conection a la bdd
     {
         die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage()); 
     } 
     
     $manager = new AnimauxManager($pdo); //instanciation d'un objet de type AnimauxManager avec l'objet pdo
?>
