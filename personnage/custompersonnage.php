<?php
include('../includes/header.php');
?>

<script>
    function afficherTete(image) {
        document.getElementById("tete_affichee").src = image;
    }
    function afficherCorps(image) {
        document.getElementById("corps_affichee").src = image;
    }
    function afficherJambes(image) {
        document.getElementById("jambes_affichee").src = image;
    }
    afficherTete('../images/tete1.jpg');
    afficherCorps('../images/corps1.jpg');
    afficherJambes('../images/jambes1.jpg');
</script>

<h2>Créez votre personnage :</h2>
<form method="post" action="resultat_personnage.php">
    <div>
        <h3>Choisissez une tête :</h3>
        <input type="radio" id="tete1" name="tete" value="tete1" onclick="afficherTete('../images/tete1.jpg')" checked>
        <label for="tete1"><img src="../images/tete1.jpg" alt="Tête 1"></label>

        <input type="radio" id="tete2" name="tete" value="tete2" onclick="afficherTete('../images/tete2.jpg')">
        <label for="tete2"><img src="../images/tete2.jpg" alt="Tête 2"></label>

        <input type="radio" id="tete3" name="tete" value="tete3" onclick="afficherTete('../images/tete3.jpg')">
        <label for="tete3"><img src="../images/tete3.jpg" alt="Tête 3"></label>
    </div>

    <div>
        <h3>Choisissez un corps :</h3>
        <input type="radio" id="corps1" name="corps" value="corps1" onclick="afficherCorps('../images/corps1.jpg')" checked>
        <label for="corps1"><img src="../images/corps1.jpg" alt="Corps 1"></label>

        <input type="radio" id="corps2" name="corps" value="corps2" onclick="afficherCorps('../images/corps2.jpg')">
        <label for="corps2"><img src="../images/corps2.jpg" alt="Corps 2"></label>

        <input type="radio" id="corps3" name="corps" value="corps3" onclick="afficherCorps('../images/corps3.jpg')">
        <label for="corps3"><img src="../images/corps3.jpg" alt="Corps 3"></label>
    </div>

    <div>
        <h3>Choisissez des jambes :</h3>
        <input type="radio" id="jambes1" name="jambes" value="jambes1" onclick="afficherJambes('../images/jambes1.jpg')" checked>
        <label for="jambes1"><img src="../images/jambes1.jpg" alt="Jambes 1"></label>

        <input type="radio" id="jambes2" name="jambes" value="jambes2" onclick="afficherJambes('../images/jambes2.jpg')">
        <label for="jambes2"><img src="../images/jambes2.jpg" alt="Jambes 2"></label>

        <input type="radio" id="jambes3" name="jambes" value="jambes3" onclick="afficherJambes('../images/jambes3.jpg')">
        <label for="jambes3"><img src="../images/jambes3.jpg" alt="Jambes 3"></label>
    </div>

    <h3>Aperçu :</h3>
    <img id="tete_affichee" src="" alt="Aperçu de la tête"><br>
    <img id="corps_affichee" src="" alt="Aperçu du corps"><br>
    <img id="jambes_affichee" src="" alt="Aperçu des jambes"><br><br>

    <input type="submit" name="submit" value="Valider la création">
</form>

<?php
include('../includes/footer.php');
?>
