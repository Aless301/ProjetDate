<?php
include('../includes/header1.php');
include('../Includes/header2.php');?>

<img src="../images/idcardfr.png" class="cardfr" alt="CarteFR">

<?php
// Vérifiez si des données ont été envoyées via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données envoyées par le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $nationalite = $_POST['nationalite'];
    $date_naissance = $_POST['date_naissance'];
    $lieu_naissance = $_POST['lieu_naissance'];
    $date_creation = $_POST['numero_serie'];
    $date_expiration = $_POST['date_expiration'];
    

    // Affichez les données récupérée
    echo "<p class='infonom'>$nom</p>";
    echo "<p class='infoprenom'>$prenom</p>";
    echo "<p class='infosexe'>$sexe</p>";
    echo "<p class='infonation'>$nationalite</p>";
    echo "<p class='infodnaissance'>$date_naissance</p>";
    echo "<p class='infolnaissance'>$lieu_naissance</p>";
    echo "<p class='infocreation'>$date_creation</p>";
    echo "<p class='infoexpiration'>$date_expiration</p>";    
} else {
    // Si aucune donnée n'a été envoyée, affichez un message d'erreur
    echo "Aucune donnée reçue.";
}
?>

<?php
include('../includes/footer.php');
?>