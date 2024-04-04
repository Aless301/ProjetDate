<?php
include('../includes/header.php');
?>

<script>
    function afficherTete(image) {
        document.getElementById("tete_affichee").src = image;
    }
    
    afficherTete('../images/tete1.jpg');

</script>

<h2>Créez votre personnage :</h2>
<form method="post" action="qcarteid.php">
    <div>
        <h3>Choisissez une tête :</h3>
        <input type="radio" id="tete1" name="tete" value="tete1" onclick="afficherTete('../images/tete1.jpg')" <?php if ($tete == 'tete1') echo 'checked'; ?>>
        <label for="tete1"><img src="../images/tete1.jpg" alt="Tête 1"></label>

        <input type="radio" id="tete2" name="tete" value="tete2" onclick="afficherTete('../images/tete2.jpg')" <?php if ($tete == 'tete2') echo 'checked'; ?>>
        <label for="tete2"><img src="../images/tete2.jpg" alt="Tête 2"></label>

        <input type="radio" id="tete3" name="tete" value="tete3" onclick="afficherTete('../images/tete3.jpg')" <?php if ($tete == 'tete3') echo 'checked'; ?>>
        <label for="tete3"><img src="../images/tete3.jpg" alt="Tête 3"></label>
    </div>

    
    <h3>Aperçu :</h3>
    <img id="tete_affichee" src="../images/<?php echo $tete; ?>.jpg" alt="Aperçu de la tête" style="width:100px;"><br>
    
    <input type="submit" name="submit" value="Valider la création">
</form>

<?php
include('../includes/footer.php');
?>
