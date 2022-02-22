<?php
//echo "test";
//1 connexion à la base
$serveur="localhost";
$login="root";
$password="";

  $con = new PDO('mysql:host=localhost;dbname=grh', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
  if($con==false) echo "pb";

?>