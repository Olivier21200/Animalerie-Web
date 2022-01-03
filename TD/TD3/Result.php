<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    if (isset($_POST['submit'])) 
    {echo"fdsf";}

    if ($method_existe($this, $method))
    {
        $this->$method($value);
    }

    
    
?>