<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire Add Emplyee</title>
        <style>
            table{
                border-collapse: collapse;
            }

            th, td{
                border: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <center>
            <table align="center" border="1">
                <tr>
                    <th colspan="2"> Nouveau Employe</th>
                </tr>
                <form action="valAddEmpl.php" method="post">
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" name="nom"></td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td><input type="text" name="prenom"></td>
                    </tr>
                    <tr>
                        <td>Sexe  </td>
                        <td>M<input type="radio" name="sexe" value="M" checked> F <input type="radio" name="sexe" value="F"></td>
                    </tr>
                    <tr>
                        <td>Adresse</td>
                        <td><textarea name="adresse"></textarea></td>
                    </tr>
                    <tr>
                        <td>Date de Naissance </td><td><input type="date" name="ddn"></td>
                    </tr>
                    <tr>
                        <td>Services </td>
                        <td>
                           
                            <select name="sevice">
                                <option value="0">choisir ici</option>
                                <?php
                            require 'connexion.php';
                            include 'trace.php';
                            $query="select numServ , designationServ from services";
                            $resut=mysqli_query($con,$query);
                            // trace($query);
                            while($service=mysqli_fetch_row($resut)){

                                ?>
                                <option value="<?php echo $service['numServ']; ?>"><?php echo $service['designationServ']; ?></option>
                            <?php } ?>
                            </select>
                            
                        </td>
                    </tr>
                    <tr align="center"><td><input type="submit" value="Valider"></td>
                        <td><input type="reset" value="Annuler"></td>
                    </tr>
                </form>
            </table>
        </center>
    </body>
</html>