<?php
include('includes/header1.php');
include('includes/header2.php'); ?>

<div class="txtwelcome">
    <p>Bienvenue dans le ProjetDate</br>Veuillez indiquer votre pseudo ci-dessous</p>
</div>
<div class="divLogin">
    <form class="bouton" method="post" action="login.php">
        <input type="text" name="pseado" placeholder="exemple : poireau" required>
        <input type="submit" name="valider" value="Valider ! ">
    </form>
    <?php
    if (isset($_POST['pseado'])) {
        $_SESSION['pseudo'] = "";
    }
    if (isset($_POST['pseado'])) {
        $_SESSION['pseudo'] = $_POST['pseado'];
    }
    if (isset($_POST['pseado'])) {
        echo '<p>Es tu sûr de vouloir "' . $_SESSION['pseudo'] . '" Comme Pseudo ? </br> Si oui la suite est ici : <a href="' . $root . 'q1.php">Le jeu !</a></p>';
    }
    ?>
</div>



<?php
include('includes/footer.php');
?>