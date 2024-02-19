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
        <form action="q1.php" method="post">
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

<?php
    if (isset($_SESSION['r1'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Holà misstinguette, comment tu vas ? </p> </div>';
    }
    if (isset($_SESSION['r2'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Salut ça va ? </p> </div>';
    }
    if (isset($_SESSION['r3'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Excuse moi tu aurais pas fais la guerre ? Car tu es canon ! </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r1'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut monsieur, jolie photo. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 5;
    } elseif (isset($_SESSION['r2'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut monsieur, jolie photo. </p> </div>';
    } elseif (isset($_SESSION['r3'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Je passe et double pour la prochaine personne. </p> </div>';
        $_SESSION['score'] = $_SESSIONST['score'] - 5;
    }
    ?>

    <div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r4" name="r4" value="4">
            <label for="reponse1"><p>Oui.</p></label><br>

            <input type="radio" id="r5" name="r5" value="5">
            <label for="reponse2"><p>Si tu me le permets.</p></label><br>

            <input type="radio" id="r6" name="r6" value="6">
            <label for="reponse3"><p>Non.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r4'])) {
        $_SESSION['r4']=$_POST['r4'];
    } elseif (isset($_POST['r5'])) {
        $_SESSION['r5']=$_POST['r5'];
    } elseif (isset($_POST['r6'])) {
        $_SESSION['r6']=$_POST['r6'];
    }
    ?>

<?php
    if (isset($_SESSION['r4'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui. </p> </div>';
    }
    if (isset($_SESSION['r5'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Si tu me le permets. </p> </div>';
    }
    if (isset($_SESSION['r6'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Non. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r4'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
    } elseif (isset($_SESSION['r5'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 5;
    } elseif (isset($_SESSION['r6'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ah ! </br> <img src="images/ah.png" alt="Denis Brognart Ah"> </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 5;
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