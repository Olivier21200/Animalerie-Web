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

    function tableMultiplication()
    {
        $i=0;
        $res ="";
        $res2 ="";
        for ($i; $i<=10; $i++) 
        {
            $res=$res."   ".$i;    
        }
        echo($res);
        for ($x=1; $x<=10 ; $x++) 
        {
            $l1;
            $c1;
            echo"</br>$x ";
        }

        
        
    }
?>