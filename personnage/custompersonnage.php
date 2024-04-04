<?php
include('../includes/header.php');

// Vérifier si une valeur de tête a été soumise via le formulaire POST
if(isset($_POST['tete'])){
    $_SESSION['tete'] = $_POST['tete']; // Stocker la valeur de tête dans la session
}

// Initialiser la valeur de tête
$tete = isset($_SESSION['tete']) ? $_SESSION['tete'] : null;

// Vérifier si une valeur de tête est définie dans la session
if(isset($_SESSION['tete'])){
    $tete = $_SESSION['tete'];
}

?>

<script>
    function afficherTete(image) {
        document.getElementById("tete_affichee").src = image;
    }
    function afficherCorps(image) {
        document.getElementById("corps_affichee").src = image;
    }
</script>

<h2>Créez votre personnage :</h2>
<form method="post" action="resultat_personnage.php">
    <div>
        <h3>Choisissez une tête :</h3>
        <input type="radio" id="tete1" name="tete" value="tete1" onclick="afficherTete('../images/tete1.jpg')" <?php if ($tete == 'tete1') echo 'checked'; ?>>
        <label for="tete1"><img src="../images/tete1.jpg" alt="Tête 1"></label>

        <input type="radio" id="tete2" name="tete" value="tete2" onclick="afficherTete('../images/tete2.jpg')" <?php if ($tete == 'tete2') echo 'checked'; ?>>
        <label for="tete2"><img src="../images/tete2.jpg" alt="Tête 2"></label>

        <input type="radio" id="tete3" name="tete" value="tete3" onclick="afficherTete('../images/tete3.jpg')" <?php if ($tete == 'tete3') echo 'checked'; ?>>
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

    <h3>Aperçu :</h3>
    <img id="tete_affichee" src="../images/<?php echo $tete; ?>.jpg" alt="Aperçu de la tête" style="width:100px;"><br>
    <img id="corps_affichee" src="../images/corps1.jpg" alt="Aperçu du corps" style="width:100px;"><br>
    
    <input type="submit" name="submit" value="Valider la création">
</form>

<?php
include('../includes/footer.php');
?>
