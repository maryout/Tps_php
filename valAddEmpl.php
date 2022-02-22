<?php
//echo "test";
//1 connexion à la base
require 'connexion.php';
include 'trace.php';
//2 récupération des données
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$adresse=$_POST['adresse'];
$ddn=$_POST['ddn'];
$service=$_POST['service'];
echo $service ; 
// récupération du fichier

//print_r($_FILES['photo']);
// if($_FILES['photo']['size']>$maxsize) echo "pb de taille";
// else if($_FILES['photo']['type']!='image/jpeg') echo "pb de type";
// else {
// 	$id=uniqid();
// 	move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/'.$id.'.jpeg');
//3 préparation de la requête

$query="insert into employes values (NULL, '$nom', '$prenom', '$sexe', '$adresse', '$ddn', '$service')";

//trace($query);

// 4 exécution

	
// }
$query = $con->query($query);

//5 fermeture de la connexion
//mysqli_close($con);
?>
Employer inséré, cliquez <a href="formAddEmpl.php"> ici </a>pour insérer un autre
