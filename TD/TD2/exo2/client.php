<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Premier Formulaire</title>
</head>
<body>
    <div id="pagePrincipal"> 
     
    <!-- top and title page formulaire -->
    <div class="container-fluid r p-5 bg-dark text-green-coolor text-center ">

        <h1>Plus petit, Plus grand</h1>
            <p class="text-white-coolor" >TD n° 2 / M3104 - Programmation web</p> 
    </div>
  
    <div class="container">
        <div class="mb-4 mt-4"></div>        
    </div>

    <?php
        $countTry;
        $maxTry;
        $countTry=0;
        $maxTry = 10;
        $i =0;

    ?>
    <!-- border-3 border-danger rounded border-->
    <div class="container ">
    <div class="container"></div>
        
        <div class="mb-3 mt-3">

            <form action="client.php" method="post">
                   <h3> <?php  $res =mt_rand(0,99); echo" resultat = $res" ?> </h3> 
                    <input type="hidden" name="numberres" class="form-control" aria-describedby="passwordHelpInline" min=0 max=99 value=$res>

                   <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputnumber" class="col-form-label">Ecriver un nombre</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" min=0 max=99 id="inputnumber" name="inputnumber" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">Nombre compris entre [0,99]</span>
                        </div>
                    </div> 
        </div> 
                <button type="submit" name="submit" class="btn btn-primary">Envoyer votre réponse</button>
            </form>
    </div>
    </div>

    <?php echo nl2br("\n \n \n \n \n");?>

    <div class="container">
        <div class="mb-3 mt-3">
            <?php
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
        </div>
    </div>

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