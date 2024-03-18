<?php
include('../includes/header.php');
?>

<body>
    <h2>Résultat de la Création de Personnage</h2>
    <?php
    if (isset($_POST['submit'])) {
        $tete = $_POST['tete'];
        $corps = $_POST['corps'];
        $jambes = $_POST['jambes'];

        echo "<p>Tête choisie : $tete</p>";
        echo "<p>Corps choisi : $corps</p>";
        echo "<p>Jambes choisies : $jambes</p>";
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