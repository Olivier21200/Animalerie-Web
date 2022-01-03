<?php 
	require_once("function.php");
	session_start();

	if (!isset($_SESSION['affichage'])) 
	{
		$_SESSION['affichage'] = "";
	} 

	elseif (isset($_POST['reset']))
	{
		if($_SESSION['affichage']=="" )
		{
			echo"<div class=\"alert alert-danger\" role=\"alert\"> ATTENTION LE CHANP DE SAISI EST DEJA VIDE </div>";	
		}

		$_SESSION['affichage'] = "";
	}

	elseif (isset($_POST['resultat']))
	{
		if($_SESSION['affichage']=="=")
		{
			echo"<div class=\"alert alert-danger\" role=\"alert\"> ERREUR CHAMP EGAL VIDE </div>";
			
			$_SESSION['affichage'] = "";
		}
		else
		{
			$valueAff = $_SESSION["affichage"];

			eval("\$aff = $valueAff;");
			$_SESSION['affichage'] = $aff;
		}	
	}
	else 
	{
		if(isset($_POST['clavier']))
		{
			$_SESSION['affichage']= $_SESSION['affichage'].$_POST['clavier'];
		}

		if(strpos($_SESSION['affichage'],"/0") !== false)
		{
			echo"<div class=\"alert alert-danger\" role=\"alert\"> ERREUR DIV PAR 0 IMPOSSIBLE </div>";
			
			$_SESSION['affichage'] = "";		
		}
		elseif(strlen($_SESSION['affichage'])>19)
		{
			echo"<div class=\"alert alert-danger\" role=\"alert\"> ATTENTION TAILLE DE LA CALCULATRICE LIMITE 20</div>";	
		}

		elseif ( isset($_POST['math']))
		{
			
			if(isset($_POST['math'])=="exp" )
			{	
				$valuePassif = $_SESSION['affichage'];
				$_SESSION['affichage']= exp($valuePassif);
			}
			elseif(isset($_POST['math'])=="log" )
			{
				$valuePassif = $_SESSION['affichage'];
				$_SESSION['affichage']= log($valuePassif);
			}
			elseif(isset($_POST['math'])=="sin" )
			{
				$valuePassif = $_SESSION['affichage'];
				$_SESSION['affichage']= sin($valuePassif);
			}
			elseif(isset($_POST['math'])=="cos" )
			{
				$valuePassif = $_SESSION['affichage'];
				$_SESSION['affichage']= cos($valuePassif);
			}
		}
				
			
		
	}	
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
    
    <title>Calculatrice en php</title>
</head>
<body>
    <div id="pagePrincipal"> 
     
    <!-- top and title page formulaire -->
    <div class="container-fluid r p-5 bg-dark text-green-coolor text-center ">

        <h1>Calculatrice avec des Boutons</h1>
            <p class="text-white-coolor" >TP n° 2 / M3104 - Programmation web</p> 
    </div>
  
    <div class="container">
        <div class="mb-4 mt-4"></div>        
    </div>

    
    <!-- border-3 border-danger rounded border-->
    <div class="container ">      
		
		<form action="calculatricehier.php" method="post">
		<center> 
            <h3>Cliquer sur un bouton</h3> 
			<br>
         
			<table class="border border-primary  table-dark">
				<tr>
					<td colspan="6" > <input type="text" name="sortie" class="btn btn-success form-control" value=" <?php echo $_SESSION["affichage"] ?>"></td> 
					<td></td>
				</tr> 
				<tr> 
					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="7"/> </td>  

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="8"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="9"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="+"/> </td>  

					<td> <input type="submit" name="math" class="btn btn-success form-control" value="exp"/> </td>  

				</tr>
				
				<tr> 
					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="4"/> </td>  

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="5"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="6"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="-"/> </td> 
					
					<td> <input type="submit" name="math" class="btn btn-success form-control" value="log"/> </td>  
				</tr>     

				<tr> 
					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="1"/> </td>  

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="2"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="3"/> </td> 

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="*"/> </td>  

					<td> <input type="submit" name="math" class="btn btn-success form-control" value="sin"/> </td>  
				</tr>

				<tr> 
					<td> <input type="submit" name="reset" class="btn btn-success form-control" value="C"/> </td>  

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="0"/> </td>  

					<td> <input type="submit" name="clavier" class="btn btn-success form-control" value="/"/> </td> 

					<td> <input type="submit" name="resultat" class="btn btn-success form-control" value="="/> </td> 

					<td> <input type="submit" name="math" class="btn btn-success form-control" value="cos"/> </td>  
				</tr>
			</table>
		</center>  
        </form>     
    </div>

	<br><br>

	</div>    
    

    <!-- Footer -->
    <footer class="page-footer font-small bg-primary">
        <div class="footer-copyright  bg-dark text-center text-white-coolor py-5">© 2021 Copyright:  Olivier Sirugue S3B1  |-/-\-| Vendredi 25 novembre 2021</div>
    </footer>

   
</body>
</html>