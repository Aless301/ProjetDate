<?php
include('../includes/header.php');
?>

<body>
    <h2>Résultat de la création du personnage</h2>
    <?php
    if(isset($_POST['submit'])){

        if(isset($_POST['tete'])){
            $tete = $_POST['tete'];
            echo "<h3>Tête choisie :</h3>";
            echo "<img src='../images/{$tete}.jpg' alt='Tête choisie' style='width:100px;'><br>";
        }

    
        if(isset($_POST['corps'])){
            $corps = $_POST['corps'];
            echo "<h3>Corps choisi :</h3>";
            echo "<img src='../images/{$corps}.jpg' alt='Corps choisi' style='width:100px;'><br>";
        }

    } else {
        echo "Aucune sélection n'a été faite.";
    }
    ?>

<form method="post" action="custompersonnage.php">
        <input type="submit" name="perso" value="Modifier le personnage">
    </form>
    <form method="post" action="../q1.php">
        <input type="submit" name="jeu" value="Vers le jeu">
    </form>
    <?php
    include('../includes/footer.php');
    ?>