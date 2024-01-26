<?php
include('includes/header.php');
?>
<div class="divGauche">

</div>

<fieldset>
<legend>Quand est mort John Fitzgerald Kennedy, le 35e président des Etats-Unis?</legend>
<form action="quiz2.php" method="post">
<input type="radio" id="president" name="president" value="22 novembre 1963" required>
<label for="president">Le 22 novembre 1963</label><br>

    <input type="radio" id="president1" name="president" value="22 janvier 1963">
<label for="president1">Le 22 janvier 1963</label><br>

    <input type="radio" id="president2" name="president" value="22 Juin 1963">
<label for="president2">Le 22 Juin 1963</label><br>

    <input class="bouton" type="submit" value="↪">

  </form>
</fieldset>

<?php
include('includes/footer.php');
?>