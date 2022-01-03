<?php 
    require_once("main-class/AnimauxManager.php");

     //Variable de link avec la bdd
     $host = 'localhost';
     $dbname = 'grp-385_s3_progweb';
     $username = 'grp-385';
     $password = 'LcCEnEEy';
  
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