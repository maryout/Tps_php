<?php
//testici 
//echo "test";
//1 connexion à la base
require 'connexion.php';
include 'trace.php';


$query = $con->query("SELECT * FROM employes");

?>
<html>
    <header></header>
    <body>
        <center> ici afficher la liste des employers 
        
        <a href="formAddEmpl.php"></a>
        <?php 
        while ($employe = $query->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            echo '<br> <br>';
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
       </center>     
    </body>
</html>