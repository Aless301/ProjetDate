<?php
include('../includes/header.php');
?>

<body>
    <h2>Résultat de la création du personnage</h2>
    <?php
    if(isset($_POST['submit'])){
        if(isset($_POST['image'])){
            $image = $_POST['image'];
            echo "<img src='$image' alt='Image choisie'>";
        } else {
            echo "Aucune image sélectionnée.";
        }
    }
    ?>

<form method="post" action="custompersonnage.php">
    <input type="submit" name="perso" value="moche">
</form>
<form method="post" action="../q1.php">
    <input type="submit" name="jeu" value="vers le jeu">
</form>
    <?php
    include('../includes/footer.php');
    ?>