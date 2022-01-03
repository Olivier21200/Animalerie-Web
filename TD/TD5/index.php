<?php 
	require_once("function.php");
	session_start();

	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Image en php</title>
</head>
<body>
    <div id="pagePrincipal"> 
     
    <!-- top and title page formulaire -->
    <div class="container-fluid r p-5 bg-dark text-green-coolor text-center ">

        <h1>Calculatrice avec des Boutons</h1>
            <p class="text-white-coolor" >Td n° 4 / M3104 - Programmation web</p> 
    </div>
  
    <div class="container">
        <div class="mb-4 mt-4"></div>        
    </div>

    
    <!-- border-3 border-danger rounded border-->
    <div class="container ">      
		
    <form method="post" enctype="multipart/form-data">
            <input type="file" name="photo">
            <input type="submit">
        </form>
    <?php
    if (isset($_FILES['photo']['tmp_name'])) 
    {
        $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
        if($retour) 
        {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['photo']['name'] . '">';
        }
    }

    ?>
    
	<br><br>

	</div>    
    

    <!-- Footer -->
    <footer class="page-footer font-small bg-primary">
        <div class="footer-copyright  bg-dark text-center text-white-coolor py-5">© 2021 Copyright:  Olivier Sirugue S3B1  |-/-\-| Vendredi 10 desembre 2021</div>
    </footer>

   
</body>
</html>