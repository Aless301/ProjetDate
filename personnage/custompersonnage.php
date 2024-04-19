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

<h2>Choisis ton personnage :</h2>
<form method="post" action="qcarteid.php">


    <div>
        <input type="radio" id="corps1" name="corps" value="corps1" onclick="afficherCorps('<?= $root ?>images/corps1.jpg')" checked>
        <label for="corps1"><img src="<?= $root ?>images/corps1.jpg" alt="Corps 1"></label>

        <input type="radio" id="corps2" name="corps" value="corps2" onclick="afficherCorps('<?= $root ?>images/corps2.jpg')">
        <label for="corps2"><img src="<?= $root ?>images/corps2.jpg" alt="Corps 2"></label>

        <input type="radio" id="corps4" name="corps" value="corps4" onclick="afficherCorps('<?= $root ?>images/corps4.jpg')">
        <label for="corps4"><img src="<?= $root ?>images/corps4.jpg" alt="Corps 4"></label>

        <input type="radio" id="corps5" name="corps" value="corps5" onclick="afficherCorps('<?= $root ?>images/corps5.jpg')">
        <label for="corps5"><img src="<?= $root ?>images/corps5.jpg" alt="Corps 5"></label>

        <input type="radio" id="corps6" name="corps" value="corps6" onclick="afficherCorps('<?= $root ?>images/corps6.jpg')">
        <label for="corps6"><img src="<?= $root ?>images/corps6.jpg" alt="Corps 6"></label>

        <input type="radio" id="corps7" name="corps" value="corps7" onclick="afficherCorps('<?= $root ?>images/corps7.jpg')">
        <label for="corps7"><img src="<?= $root ?>images/corps7.jpg" alt="Corps 7"></label>

        <input type="radio" id="corps8" name="corps" value="corps8" onclick="afficherCorps('<?= $root ?>images/corps8.jpg')">
        <label for="corps8"><img src="<?= $root ?>images/corps8.jpg" alt="Corps 8"></label>

        <input type="radio" id="corps9" name="corps" value="corps9" onclick="afficherCorps('<?= $root ?>images/corps9.jpg')">
        <label for="corps9"><img src="<?= $root ?>images/corps9.jpg" alt="Corps 9"></label>

        <input type="radio" id="corps3" name="corps" value="corps3" onclick="afficherCorps('<?= $root ?>images/corps3.png')">
        <label for="corps3"><img src="<?= $root ?>images/corps3.png" alt="Corps 3"></label>

    </div>

    <h3>Aperçu :</h3>
    <img id="corps_affichee" src="" alt="Aperçu du corps"><br>

    <input type="submit" name="submit" value="Valider la création">
</form>