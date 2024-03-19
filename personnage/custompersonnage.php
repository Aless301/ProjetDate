<?php
include('../includes/header.php');
?>

<script>
        function afficherImage(image) {
            document.getElementById("image_affichee").src = image;
        }
        // Appel initial pour afficher l'image par défaut
        afficherImage('../images/tete1.jpg');
    </script>
    <h2>Choisissez une image :</h2>
    <form method="post" action="resultat_personnage.php">
        <label for="image">Choisissez une image :</label><br><br>

        <input type="radio" id="image1" name="image" value="../images/tete1.jpg" onclick="afficherImage('../images/tete1.jpg')">
        <label for="image1"><img src="../images/tete1.jpg" alt="Tête 1"></label><br>

        <input type="radio" id="image2" name="image" value="../images/tete2.jpg" onclick="afficherImage('../images/tete2.jpg')">
        <label for="image2"><img src="../images/tete2.jpg" alt="Tête 2"></label><br>

        <input type="radio" id="image3" name="image" value="../images/tete3.jpg" onclick="afficherImage('../images/tete3.jpg')">
        <label for="image3"><img src="../images/tete3.jpg" alt="Tête 3"></label><br><br>

        <img id="image_affichee" src="" alt="Aucune image sélectionnée"><br><br>

        <input type="submit" name="submit" value="Valider">
    </form>

<?php
include('../includes/footer.php');
?>
