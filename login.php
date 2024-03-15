<?php
include('includes/header.php');
?>
<div style="text-align: center;">
    <div class="divLogin">
        <form class="bouton" method="post" action="login.php">
            <input type="text" name="pseudo" placeholder="Votre pseudo...">
            <input type="submit" name="valider" value="Valider ! ">
        </form>
        <?php
        if (isset($_POST['pseudo'])) {
            $_SESSION['pseado'] = "";
        }
        if (isset($_POST['pseudo'])) {
            $_SESSION['pseudo'] = $_POST['pseudo'];
        }
        if (isset($_POST['pseudo'])) {
            echo '<p>Es tu sûr de vouloir "' . $_SESSION['pseudo'] . '" Comme Pseudo ? </br> Si oui la suite est ici : </br> <a href="q1.php">Le jeu !</a></p>';
        }
        ?>
    </div>
</div>
<?php
include('includes/footer.php');
?>