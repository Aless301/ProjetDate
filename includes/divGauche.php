<?php
    echo '<p>Votre Score : '.$_SESSION['score'].'</p>';
?>
<?php
    echo '<p>'.$_SESSION['pseudo'].'</p>'
?>

<h1>Hall of Fame</h1>
    <?php
    // Affiche le contenu du fichier texte
    $hallOfFameContent = file_get_contents("hall_of_fame.txt");
    echo '<p>'.nl2br($hallOfFameContent).'</p>';
    ?>