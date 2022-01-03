<?php
    require_once("main-class/Animal.php");
    require_once("main-class/AnimauxManager.php");
 
    include ("Liste_Animaux.php");

    //getList   
    //$res2 = $manager->getList();

    echo("

    <table class=\"table table-hover\"> 

        <thead>
            <tr>
                <th class=\"text-primary\">Id</th>
                <th class=\"text-primary\">Nom</th>
                <th class=\"text-primary\">Espece</th>
                <th class=\"text-primary\">Cri</th>
                <th class=\"text-primary\">Proprietaire</th>
                <th class=\"text-primary\">Age</th>
                <th class=\"text-primary\">modifier</th>
            </tr>
        </thead>");
        
        foreach ($res2 as $val) 
        {
            //echo $val->__toString();
            echo("<tbody> <tr>
            
            <td>".$val->id()."</td>
            <td>".$val->nom()."</td>
            <td>".$val->espece()."</td>
            <td>".$val->cri()."</td> 
            <td>".$val->Proprietaire()."</td> 
            <td>".$val->age()."</td>  
            <td>  <a href=\"modifier.php?id=".$val->id()."\">modifier </a>  "."</td>  
            <td>  <a href=\"nav-item/VueSupprimer.php?id=".$val->id()."\">supprimer </a>  "." </td>
            </tr> </tbody>");
        } 

        echo"</table>";       
?>

