<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>
<div class="container">
            <?php 
                require_once("../utility/Form.php");
                require_once("../main-class/Animal.php");
                require_once("../main-class/AnimauxManager.php");
                require_once("../connexion_sql.php");

                $form = new Form("ajout.php");
                $name = new Champ("Nom", "nom", "text");
                $espece = new Champ("Espece", "espece", "text");
                $cri = new Champ("Cri", "cri", "text");
                $proprietaire = new Champ("Proprietaire", "proprietaire", "text");
                $age = new Champ("Age", "age", "number");

                $submit = new Champ("", "submit", "submit", "Go!");
                
                $form->add($name);
                $form->add($espece);
                $form->add($cri);
                $form->add($proprietaire);
                $form->add($age);
                $form->add($submit);

                echo $form->__toString();    
                
                if (isset($_POST['submit'])) 
                {       
                   if (isset($_POST['nom']) && isset($_POST['espece']) &&  isset($_POST['cri']) && isset($_POST['proprietaire']) && isset($_POST['age']));  
                   {       
                      $name = $_POST['nom'];
                      $espece = $_POST['espece'];
                      $cri = $_POST['cri'];
                      $proprietaire = $_POST['proprietaire'];
                      $age = $_POST['age'];

                      $A2 = new Animal(1,$name,$espece,$cri,$proprietaire,$age);

                      $manager->add($A2);
                   }
                }
                else
                {
                   echo "Veuillez remplire tout les champs afin d'ajouter un animal à la liste.";
                }
            ?>

            
</div>
</body>
</html>



