<?php
include 'includes/header.php';
?>
<div class="divDroite">
<div class="bubbleG">
        <div class="arrow left-arrow"></div>
        <p>Comment Lancer la discussion ? </p>
    </div>

    <div class="bubbleQ">
        <form action="q2.php" method="post">
            <input type="radio" id="r1" name="r1" value="1">
            <label for="president">Holà misstinguette, comment tu vas ?</label><br>

            <input type="radio" id="r2" name="r2" value="2">
            <label for="president1">Salut ça va ?</label><br>

            <input type="radio" id="r3" name="r3" value="3">
            <label for="president2">Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</label><br>
        </form>
    </div>
<?php
        if (isset($_POST['r1'])) {
            echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> Holà misstinguette, comment tu vas ? </div>';
        }
        if (isset($_POST['r2'])) {
            echo '<div class="bubbleD">  <div class="arrow right-arrow"></div>Salut ça va ? </div>';
        }
        if (isset($_POST['r3'])) {
            echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> Excuse moi tu aurais pas fais la guerre ? Car tu es canon ! </div>';
        }
        ?>
    
        <?php
            if (isset($_POST['r1'])) {
                echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> Salut monsieur, jolie photo. </div>';
                $_SESSION['score'] = $_SESSION['score'] + 5;
        } 
            elseif (isset($_POST['r2'])) {
                echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> Salut monsieur, jolie photo. </div>';
        } 
            elseif (isset($_POST['r3'])) {
                echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> Je passe et double pour la prochaine personne. </div>';
                $_SESSION['score'] = $_SESSION['score'] - 5;
        }
        ?>

<div class="bubbleG">
        <div class="arrow left-arrow"></div>
        <p>Tu veux rentrer ?</p>
    </div>

    <div class="bubbleQ">
        <form action="q2.php" method="post">
            <input type="radio" id="r1" name="r1" value="1">
            <label for="president">Holà misstinguette, comment tu vas ?</label><br>

            <input type="radio" id="r2" name="r2" value="2">
            <label for="president1">Salut ça va ?</label><br>

            <input type="radio" id="r3" name="r3" value="3">
            <label for="president2">Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</label><br>

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
include 'includes/footer.php';
?>