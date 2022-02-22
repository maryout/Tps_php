<?php
session_start();
if(!isset($_SESSION['user'])) header('location:formauth.php?auth=false');

?>

<a href='deconnexion.php'>déconnexion</a>
<?php
//echo "test";
//1 connexion à la base
require 'connexion.php';
include 'trace.php';


$query="select * from patients ";


// 4 exécution
$resut=mysqli_query($con,$query );
trace($query);

while($service=mysqli_fetch_row($resut))
	{

		echo "<img src='photos/".$service['rapport'].".jpeg'>";
}
//5 fermeture de la connexion
mysqli_close($con);
?>

