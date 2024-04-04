<?php
if(isset($_POST['submit'])){
    if(isset($_POST['tete'])){
        $_SESSION['tete'] = $_POST['tete'];
    }
    if(isset($_POST['corps'])){
        $_SESSION['corps'] = $_POST['corps'];
    }
}

if(!isset($_SESSION['tete'])) {
    echo "Aucune sélection de tête n'a été faite.";
    exit;
}

header("Location: qcarteid.php");
exit;
?>
