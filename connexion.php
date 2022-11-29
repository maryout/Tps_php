<?php
//echo "test";
//premier connexion 
$serveur="localhost";
$login="root";
$password="123456";

  $con = new PDO('mysql:host=localhost;dbname=grh', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
  if($con==false) echo "pb";

?>
