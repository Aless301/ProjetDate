<?php
include('includes/header.php');
?>
<?php
$_POST['score'] = 0;
?>
<div class="divDroite">
<fieldset>
    <legend>Comment Lancer la discussion ? </legend>
    <form action="index.php" method="post">
        <input type="radio" id="r1" name="r1" value="1">
        <label for="president">Holà misstinguette, comment tu vas ?</label><br>

        <input type="radio" id="r2" name="r2" value="2">
        <label for="president1">Salut ça va ?</label><br>

        <input type="radio" id="r3" name="r3" value="3">
        <label for="president2">Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</label><br>

        <input class="bouton" type="submit" value="↪">

    </form>
</fieldset>
<?php
if (isset($_POST['r1'])) {
    echo 'Salut monsieur, jolie photo.';
    $_POST['score'] = $_POST['score'] + 5;
}
if (isset($_POST['r2'])) {
    echo 'Salut monsieur, jolie photo.';
}
if (isset($_POST['r3'])) {
    echo 'Je passe et double pour la prochaine personne.';
    $_POST['score'] = $_POST['score'] - 5;
}
?>
</div>
<div class="divGauche">
    <?php
    echo $_POST['score'];
    ?>
</div>
<?php
include('includes/footer.php');
?>