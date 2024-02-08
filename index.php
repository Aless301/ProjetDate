<?php
include('includes/header.php');
?>
<?php
$_SESSION['score'] = 0;
?>
<div class="divDroite">

    <div class="bubbleG">
        <div class="arrow left-arrow"></div>
        <p>Comment Lancer la discussion ? </p>
    </div>

    <div class="bubbleQ">
        <form action="q2.php" method="post">
            <input type="radio" id="r1" name="r1" value="1">
            <label for="reponse1">Holà misstinguette, comment tu vas ?</label><br>

            <input type="radio" id="r2" name="r2" value="2">
            <label for="reponse2">Salut ça va ?</label><br>

            <input type="radio" id="r3" name="r3" value="3">
            <label for="reponse3">Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>
</div>
<div class="divGauche">
    <?php
    echo $_SESSION['score'];
    ?>
</div>
<?php
include('includes/footer.php');
?>