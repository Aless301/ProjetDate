<?php
include('includes/header.php');
?>
<form method="post" action="login.php">
    <input type="text" name="pseudo" placeholder="Votre pseudo...">
    <input type="submit" name="valider" value="Valider ! ">
</form>
<?php
if (isset($_POST['pseudo'])){
    $_SESSION['pseado']="";
}
if (isset($_POST['pseudo'])){
    $_SESSION['pseudo']=$_POST['pseudo'];
}
if (isset($_POST['pseudo'])){
echo '<p>Es tu sur de vouloir "'.$_SESSION['pseudo'].'" Comme Pseudo ? </br> Si oui la suite est ici : <a href="q1.php">Le jeu !</a></p>';
}
?>
<?php
include('includes/footer.php');
?>