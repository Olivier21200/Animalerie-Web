<?php 
    require_once('../main-class/AnimauxManager.php');

    define( 'DB_NAME', 'grp-385_s3_progweb' ); //db name
    define( 'DB_USER', 'grp-385' );//login bdd
    define( 'DB_PASSWORD', 'LcCEnEEy' ); //mdp bdd
    define( 'DB_HOST', 'localhost' ); //ip bdd
    define( 'DB_TABLE', 'animaux' ); //name table


 //Variable du nom de la base de données
 $dbname = 'grp-385_s3_progweb';

try //test de conection a la bdd
{
    // connexion à Mysql sans base de données
    $pdo = new PDO('mysql:host='.DB_HOST, DB_USER, DB_PASSWORD);
}
catch (PDOException $e)  //exception en cas de problème de conection a la bdd
{
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage()); 
} 

// création de la requête sql
// on teste avant si elle existe ou non (par sécurité)
$requete = "CREATE DATABASE IF NOT EXISTS `".DB_NAME."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
 
// on prépare et on exécute la requête
$pdo->prepare($requete)->execute();

// connexion à la bdd
$connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
 
// on vérifie que la connexion est bonne
if($connexion)
{
	// on créer la requête
	$requete = "CREATE TABLE IF NOT EXISTS `".DB_NAME."`.`".DB_TABLE."` (
				`id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
				`nom` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL ,
                `espece` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                `cri` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                `proprietaire` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                `age` int(3) DEFAULT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";
 
	$connexion->prepare($requete)->execute();// on prépare et on exécute la requête
}

$manager = new AnimauxManager($connexion); //création d'un objet AnimauxManager

//Création et ajouts de 3 animaux de départ pour notre animalerie//

$_id= 1; $_nom ="Alex"; $_espece="chient"; $_cri = "houaf"; $_proprietaire ="david"; $_age = 10; //paramètre pour la création d'animaux
$animal = new Animal($_id, $_nom, $_espece, $_cri,$_proprietaire, $_age); //Création d'un animal 
$manager->add($animal); //Ajout de notre animal dans notre base de données

$_id= 2; $_nom ="Tigrette"; $_espece="chat"; $_cri = "miaou"; $_proprietaire ="Yhoan"; $_age = 10; //paramètre pour la création d'animaux
$animal = new Animal($_id, $_nom, $_espece, $_cri,$_proprietaire, $_age); //Création d'un animal 
$manager->add($animal); //Ajout de notre animal dans notre base de données

$_id= 3; $_nom ="Red"; $_espece="loup"; $_cri = "Grrr"; $_proprietaire ="Fred"; $_age = 10; //paramètre pour la création d'animaux
$animal = new Animal($_id, $_nom, $_espece, $_cri,$_proprietaire, $_age); //Création d'un animal 
$manager->add($animal); //Ajout de notre animal dans notre base de données

?>