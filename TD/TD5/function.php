<?php

    function printWelloWorld()
    {
       echo"<p>1)  Hello world</p>";
    }

    function printWelloWorld2()
    {
       echo"<p>2)  Hello <br/> world </p>";
    }

    function simplePrintHellof10()
    {   
        echo"<p>4) </p>";
        echo"<ul>";
        for ($i = 0 ; $i<=10 ; $i++) 
        {
         if($i>=1)
         {
            echo("<li> Hello world </li>");
         }
        }
        echo"</ul>";
    }

   
    function simpleLigne()
    {
        echo nl2br("</br>");
    }

    function doubleLigne()
    {
        echo nl2br("</br> </br>");
    }

 
    
?>