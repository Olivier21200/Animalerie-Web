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

        <h1>Page Formulaire</h1>
            <p class="text-white-coolor" >TD n° 2 / M3104 - Programmation web</p> 
    </div>
  
    <div class="container">
        <div class="mb-4 mt-4"></div>        
    </div>

    <!-- border-3 border-danger rounded border-->
    <div class="container ">
    <div class="container"></div>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Saisir votre nom :</label>
                <input type="email" class="form-control" id="email" placeholder="Entrer votre nom de famille" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Saisir votre olivier :</label>
                <input type="password" class="form-control" id="pwd" placeholder="Entrer votre prenom" name="pswd">
            </div>

            <div class="mb-3">
                <label for="hidden_button" class="form-label">hidden :</label>
                <input type="hidden" class="form-control" id="hidden_button" name="hidden_button">
            </div>

            <div class="mb-3">
                <label for="hidden_button" class="form-label">Liste déroulante :</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cliquer sur votre catégorie</option>
                    <option value="enfant">Enfant</option>
                    <option value="ado">Ado</option>
                    <option value="adulte">Adulte</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Liste à puce :  </label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">Etudiant</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">Vie active</label>
                </div>
            </div>

            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

    <?php echo nl2br("\n \n \n \n \n");?>

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