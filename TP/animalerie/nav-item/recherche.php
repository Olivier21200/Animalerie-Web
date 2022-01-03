<?php 
    function recherchePage() 
    {
        require_once("../utility/Form.php");
        require_once("../main-class/AnimauxManager.php");
        require_once("../connexion_sql.php");

        $form = new Form("VueRecherche.php");
        
        $name = new Champ("Nom de l'animal que vous cherchez", "nom", "text");
        $submit = new Champ("", "submit", "submit", "recherche");
        
        $form->add($name);
        $form->add($submit);

        echo $form->__toString();

        if (isset($_POST['submit']))
        {       
            if (isset($_POST['nom']) ) 
            {       
                $name = $_POST['nom'];
    
                $res3 = $manager->find($name);

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
                            //echo $val->__toString();
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
            echo "<p class='alert alert-info alert-dismissible fade show'> Veuillez remplire un des champs afin de modifier un animal.</p>";
        }
    }
?>