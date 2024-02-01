<?php
include('includes/header.php');
?>
<div class="divGauche">

</div>

<fieldset>
<legend>Comment Lancer la discussion ? </legend>
<form action="index.php" method="post">
<input type="radio" id="r1" name="r1" value="1" required>
<label for="president">Holà misstinguette, comment tu vas ?</label><br>

    <input type="radio" id="r2" name="r2" value="2">
<label for="president1">Salut ça va ?</label><br>

    <input type="radio" id="r3" name="r3" value="3">
<label for="president2">Excuse moi tu aurais pas fais la guerre ? Car tu es canon !</label><br>

    <input class="bouton" type="submit" value="↪">

  </form>
</fieldset>
<?php
if(isset($_POST['r1'])){
    echo'Salut monsieur, jolie photo.';
}
?>

<?php
include('includes/footer.php');
?>