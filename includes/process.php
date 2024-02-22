<?php
include('header.php');
?>
<head>
<meta http-equiv="refresh" content="1;../findepage.php" />
</head>
<?php
// Vérifie si le formulaire du pseudo a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Récupère les données du formulaire et autres données
    $pseudo = $_SESSION["pseudo"];
    $score = $_SESSION["score"];

    // Formatte les données
    $entry = "Nom: $pseudo\n Score: $score\n\n\n";

    // Ajoute l'entrée au fichier texte
    $file = fopen("../hall_of_fame.txt", "a");
    fwrite($file, $entry);
    fclose($file);

    exit();
}

include('footer.php');
?>