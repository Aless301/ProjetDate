<?php
include('../includes/header.php');
?>
<h2>Création de Personnage</h2>
<form method="post" action="resultat_personnage.php">
    <label for="tete">Choisissez une tête :</label>
    <select name="tete" id="tete">
        <option value="tete1">Tête 1</option>
        <option value="tete2">Tête 2</option>
        <option value="tete3">Tête 3</option>
    </select><br><br>

    <label for="corps">Choisissez un corps :</label>
    <select name="corps" id="corps">
        <option value="corps1">Corps 1</option>
        <option value="corps2">Corps 2</option>
        <option value="corps3">Corps 3</option>
    </select><br><br>

    <label for="jambes">Choisissez des jambes :</label>
    <select name="jambes" id="jambes">
        <option value="jambes1">Jambes 1</option>
        <option value="jambes2">Jambes 2</option>
        <option value="jambes3">Jambes 3</option>
    </select><br><br>

    <input type="submit" name="submit" value="Créer Personnage">
    </form>
<?php
include('../includes/footer.php');
?>