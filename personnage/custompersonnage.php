<?php
include('../includes/header.php');
?>
<h2>Création de Personnage</h2>
<form method="post" action="resultat_personnage.php">
        <label for="tete">Choisissez une tête :</label>
        <select name="tete" id="tete">
            <option value="tete1"> <img src="images/tete1.jpg" alt="Tête 1"> </option>
            <option value="tete2"> <img src="chemin/vers/tete2.jpg" alt="Tête 2"> </option>
            <option value="tete3"> <img src="chemin/vers/tete3.jpg" alt="Tête 3"> </option>
        </select><br><br>

        <label for="corps">Choisissez un corps :</label>
        <select name="corps" id="corps">
            <option value="corps1"> <img src="images/tete1.jpg" alt="Corps 1"> </option>
            <option value="corps2"> <img src="chemin/vers/corps2.jpg" alt="Corps 2"> </option>
            <option value="corps3"> <img src="chemin/vers/corps3.jpg" alt="Corps 3"> </option>
        </select><br><br>

        <label for="jambes">Choisissez des jambes :</label>
        <select name="jambes" id="jambes">
            <option value="jambes1"> <img src="images/tete1.jpg" alt="Jambes 1"> </option>
            <option value="jambes2"> <img src="chemin/vers/jambes2.jpg" alt="Jambes 2"> </option>
            <option value="jambes3"> <img src="chemin/vers/jambes3.jpg" alt="Jambes 3"> </option>
        </select><br><br>

        <input type="submit" name="submit" value="Créer Personnage">
    </form>
<?php
include('../includes/footer.php');
?>