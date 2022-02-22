<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

//echo "test";
//1 connexion à la base
require 'connexion.php';
include 'trace.php';


$query = $con->query("SELECT * FROM employes");

?>
<div class="container">
  <h2>Listes des employers  </h2>
  <p></p>
  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>sexe</th>
        <th>address</th>
        <th>dateNaissance</th>
        <th>Service</th>
      </tr>
    </thead>
    <tbody>
    <?php 

        while ($employe = $query->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            echo '';
            echo '<td>'.$employe["nom"].'  '.'</td>';
            echo '<td>'.$employe["prenom"].'  '.'</td>';
            echo '<td>'.$employe["sexe"].'  '.'</td>';
            echo '<td>'.$employe["adresse"].'  '.'</td>';
            echo '<td>'.$employe["dateNaissance"].'  '.'</td>';	
            $code = $employe['numServ'];
            $queryS = $con->query("SELECT designationServ FROM services where numServ = $code"); 
            while ($service = $queryS->fetch(PDO::FETCH_ASSOC)){
                echo '<td>'.$service['designationServ'].'</td>';
            }	
            echo '
                <td>
                    <a href="editEmplA.php?code='.$employe['code'].'"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                    <a href="#deleteModal" class="delete" data-toggle="modal" data-id='.$employe["code"].'><i class="fa fa-trash-o" style="font-size:24px"></i></a>
                </td>
            ';	
            echo '</tr>';
        }
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
