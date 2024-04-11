<?php
include('../includes/header1.php');
include('../includes/header2.php');
?>

<script>
    function afficherCorps(image) {
        document.getElementById("corps_affichee").src = image;
    }

    afficherCorps('images/corps1.jpg');
</script>

<h2>Créez votre personnage :</h2>
<form method="post" action="qcarteid.php">


    <div>
        <h3>Choisissez un corps :</h3>
        <input type="radio" id="corps1" name="corps" value="corps1" onclick="afficherCorps('<?= $root ?>images/corps1.jpg')" checked>
        <label for="corps1"><img src="<?= $root ?>images/corps1.jpg" alt="Corps 1"></label>

        <input type="radio" id="corps2" name="corps" value="corps2" onclick="afficherCorps('<?= $root ?>images/corps2.jpg')">
        <label for="corps2"><img src="<?= $root ?>images/corps2.jpg" alt="Corps 2"></label>

        <input type="radio" id="corps3" name="corps" value="corps3" onclick="afficherCorps('<?= $root ?>images/corps3.jpg')">
        <label for="corps3"><img src="<?= $root ?>images/corps3.jpg" alt="Corps 3"></label>
    </div>

    <h3>Aperçu :</h3>
    <img id="corps_affichee" src="" alt="Aperçu du corps"><br>

    <input type="submit" name="submit" value="Valider la création">
</form>