<?php 

    require_once("main-class/AnimauxManager.php"); //Pour la creation de l'objet AnimauxManager

    include ("connexion_sql.php"); //Pour récupéré l'objet pdo de notre conection a notre base de données
    
    $manager = new AnimauxManager($pdo);  //instanciation d'un objet de type AnimauxManager

    $res2 = $manager->getList(); //lister l’ensemble des animaux
    
?>