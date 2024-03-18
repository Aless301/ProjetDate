<?php
    include('../includes/header.php');
?>

<body>
    <h2>Résultat de la Création de Personnage</h2>
    <?php
    if(isset($_POST['submit'])){
        $tete = $_POST['tete'];
        $corps = $_POST['corps'];
        $jambes = $_POST['jambes'];

        echo "<p>Tête choisie : $tete</p>";
        echo "<p>Corps choisi : $corps</p>";
        echo "<p>Jambes choisies : $jambes</p>";
    }
?>

<?php
    include('../includes/footer.php');
?>
