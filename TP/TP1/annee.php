<?php require_once("function.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Hello World php</title>
</head>
<body>
    <div id="pagePrincipal"> 
     
    <!-- top and title page formulaire -->
    <div class="container-fluid r p-5 bg-dark text-green-coolor text-center ">

        <h1>Hello world</h1>
            <p class="text-white-coolor" >TP n° 1 / M3104 - Programmation web</p> 
    </div>
  
    <div class="container">
        <div class="mb-4 mt-4"></div>        
    </div>

    
    <!-- border-3 border-danger rounded border-->
    <div class="container "> 
        <div class="mb-3 mt-3"> 
              
        <?php   require_once("function.php");

                if (isset($_POST['submit'])) 
                {
                
                $year= $_POST['numberres'];
                }

                function is_leap_year($year)
                {
                    $res =false;

                    if ($year % 400 == 0) 
                    {
                        $res =true;
                    }
                    elseif ($year % 100 == 0) 
                    {
                        $res =false;
                    }
                    elseif ($year % 4 == 0)
                    {
                        $res =true;
                    }
                    return $res;
                }

                    if( is_leap_year($year) == TRUE )
                    {
                        echo "<h2>l'Année $year est bissextile</h2>";
                    }
                    else
                    {
                        echo "<h2>L'année $year n'est pas bissextile</h2>";
                    }
                ?>      
        </div>

        <form action="helloWorld.php" method="post">
            <input type="submit" name="submit" class="btn btn-primary" value="Accueil🏠"/>
        </form> 
        <div class="mb-3 mt-3"> 
            <?php 
                tableMultiplication();  
            ?>
        </div>
      
        
    </div>

    <?php doubleLigne(); doubleLigne();?>

    
    <div class="container"></div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-primary">

    <!-- Copyright -->
    <div class="footer-copyright  bg-dark text-center text-white-coolor py-5">© 2021 Copyright:  Olivier Sirugue S3B1  |-/-\-| Vendredi 25 novembre 2021
   
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    </div>
</body>
</html>




