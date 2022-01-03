<?php
    // fichier script.php
    if (isset($_POST['submit'])) 
    {
        
        if( strlen($_POST['inputnumber'])==0)
        {
            echo "Merci de saisir une Valeur !\n"; 
        }
        elseif($_POST['inputnumber']>$res)
        {
            echo "Valeur saisie ".$_POST['inputnumber']." est trop grande res : ".$res."\n";
        }
        elseif($_POST['inputnumber']<$res)
        {
            echo "Valeur saisie ".$_POST['inputnumber']." est trop petite res : ".$res."\n";
        }
        else
        {
            echo"Bravo C'est GAGNER !!!";
        }

    } ?>  
?>