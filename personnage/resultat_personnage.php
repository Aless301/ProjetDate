<?php
if(isset($_POST['tete'])){
    $tete = $_POST['tete'];
    echo "<h3>Tête choisie :</h3>";
    echo "<img src='../images/{$tete}.jpg' alt='Tête choisie' style='width:100px;'><br>";
}
   
}

if(!isset($_SESSION['tete'])) {
    echo "Aucune sélection de tête n'a été faite.";
    exit;
}

header("Location: qcarteid.php");
exit;
?>
