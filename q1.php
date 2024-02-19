<?php
include('includes/header.php');
?>
<?php
$_SESSION['score'] = 0;
?>
<div class="divDroite">

    <div class="bubbleG">
        <div class="arrow left-arrow"></div>
        <p>Comment veux tu lancer la discussion <?php echo $_SESSION['pseudo']; ?>? </p>
    </div>

    <div class="bubbleQ">
        <form action="q2.php" method="post">
            <input type="radio" id="r1" name="r1" value="1">
            <label for="reponse1"><p>Holà misstinguette, comment tu vas ?</p></label><br>

            <input type="radio" id="r2" name="r2" value="2">
            <label for="reponse2"><p>Salut ça va ?</p></label><br>

            <input type="radio" id="r3" name="r3" value="3">
            <label for="reponse3"><p>Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>
    <?php
    if (isset($_POST['r1'])) {
        $_SESSION['r1']=$_POST['r1'];
    } elseif (isset($_POST['r2'])) {
        $_SESSION['r2']=$_POST['r2'];
    } elseif (isset($_POST['r3'])) {
        $_SESSION['r3']=$_POST['r3'];
    }
    ?>

</div>
</div>
<div class="divGauche">
    <?php
    include('includes/divGauche.php');
    ?>
</div>
<?php
include('includes/footer.php');
?>