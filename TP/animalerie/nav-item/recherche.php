<?php 
    function recherchePage() 
    {
        //link de fichier php
        require_once("../utility/Form.php");
        require_once("../main-class/AnimauxManager.php");
        require_once("../connexion_sql.php");

        $form = new Form("VueRecherche.php"); //Création du formulaire de recherche
        
        $name = new Champ("Nom de l'animal que vous cherchez", "nom", "text"); //Creation du champ du nom de l'animal
        $submit = new Champ("", "submit", "submit", "recherche"); //Création du bouton d'envoie du formulaire
        
        //Ajouts des champs au formulaire
        $form->add($name);
        $form->add($submit);

        echo $form->__toString();//Affichage du formulaire   


        if (isset($_POST['submit']))//On vérifie si une action est effectué sur le bouton ajout du formulaire
        {       
            if (isset($_POST['nom']) ) //On vérifie si le champ nom a été remplie
            {       
                $name = $_POST['nom']; //On récupere la valeur du champ
    
                $res3 = $manager->find($name); //On appel la fonction recherche de AnimauxManager

                //On affiche sous forme de tableau le résultat de la recherche
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
                            </tr>
                        </thead>");
                        
                        foreach ($res3 as $val) 
                        {
                            echo("<tbody> <tr>
                            
                            <td>".$val->id()."</td>
                            <td>".$val->nom()."</td>
                            <td>".$val->espece()."</td>
                            <td>".$val->cri()."</td> 
                            <td>".$val->Proprietaire()."</td> 
                            <td>".$val->age()."</td>  
                            </tr> </tbody>");
                        } 
                        echo"</table>";         
            }
        }
        else
        {
            //Affichage de la notiffication d'information
            echo "<p class='alert alert-info alert-dismissible fade show'> Veuillez saisir dans le champ le nom ou le début du nom de l'animal que vous chercher. Attention au maj!</p>";
        }
    }
?>