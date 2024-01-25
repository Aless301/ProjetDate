<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OraOne</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../logo.png">
</head>
<body>
<nav>
    <img style="float: right;" src="../logo.png" alt="">
    <ul>
        <li><a href="../index.php">Index</a></li>
        <li>
            <?php    
            if(!isset($_SESSION['pseudo'])){
                $Pseudo="";
            }
            if(isset($_SESSION['pseudo'])){
                $Pseudo=$_SESSION['pseudo'];
            }
            if(!isset($_SESSION['pseudo'])){
                echo'<a href="../users/inscription.php">Connectez Vous !</a>';
            }
            
            
            //on se connecte une fois pour toutes les actions possible de cette page:
            $mysqli=mysqli_connect('mysql-cndbsromaing.alwaysdata.net','325510_site','Lekikoo123!','cndbsromaing_users');//'serveur','nom d'utilisateur','pass','nom de la table'
                if(!$mysqli) {
                    echo "Erreur connexion BDD";
                    //Dans ce script, je pars du principe que les erreurs ne sont pas affichées sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela décommentez la ligne suivante:
                    //echo "<br>Erreur retournée: ".mysqli_error($mysqli);
                }
            else{
                echo'<a href="../users/espace-membre.php">'.$Pseudo.'</a>';
            }
            ?>
        </li>
    </ul>
</nav>