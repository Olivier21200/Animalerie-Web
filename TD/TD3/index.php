<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require_once("Champ.php");
    require_once("Forum.php");

     $label ="lastName";
     $name ="lastName";
     $type ="text";
     $value ="test";

    $champN1 = new Champ($label, $name, $type, $value);

    $label ="firstName";
    $name ="firstName";
    $type ="text";
    $value ="test2";

    $champN2 = new Champ($label, $name, $type, $value);

    $action ="result";
    $Forum1 = new Forum($action);

    $Forum1->__add($champN1);
    $Forum1->__add($champN2);

    $Forum1->__toString();
    
?>