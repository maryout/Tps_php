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
    <?php
                                    //1 connexion à la base
                                    require 'connexion.php';
                                    include 'trace.php';
                                    ?>
                                    <?php
                                    $query = $con->query("SELECT * FROM services");
                                    // trace($query);
                                    
                                ?>
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
                        
                            <select name="service">
                                <option value="0">choisir ici</option>
                                <?php
                                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                ?>

                                <option value="<?php echo $row['numServ']; ?>"><?php echo $row['designationServ']; ?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr align="center"><td><input type="submit" value="Valider"></td>
                        <td><input type="reset" value="Annuler"></td>
                    </tr>
                    <tr align="center"><td colspan="2"><a href="allEmpls.php">Affiche la liste des emplouyers </a></td>
                    </tr>
                </form>
            </table>
        </center>
    </body>
</html>