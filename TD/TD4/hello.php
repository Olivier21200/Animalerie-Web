<?php
    session_start();

    $valeur =4;

    $_SESSION['variable'] = $valeur ;

    if (isset($_SESSION['variable'])) 
    {
        echo 'La variable "variable" existe !'; 
        echo 'et sa valeur vaut' .$_SESSION['variable'];
    }

    unset($_SESSION['variable']); 
    echo 'La variable de session "variable" est maintenant 
    détruite'; 
        
?>