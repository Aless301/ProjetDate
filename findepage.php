<?php
include('includes/header.php');
?>
    <?php
    

                if ($_SESSION["score"] > 100) {
                    echo '<h1>C\'est Gagné !</h1>';
                    echo '<p>CHAMPIOOON'. $SCORE_SESSION["score"].'</p>';
                    echo '<img class="meme" src="https://www.gif-maniac.com/gifs/53/53118.gif" alt="Trop Cooool!">';
                    echo '<audio src="https://youtu.be/48QA4s2FRE8"></audio>';
                    
                } elseif ($_SESSION["score"] < 100 && $_SESSION["score"] || 0 ) {
                    echo '<h1>C\'est pas Gagné, mais c\'est pas Perdu !</h1>';
                    echo '<p>This is the friendzone</p>';
                    echo '<img class="meme" src="https://usagif.com/wp-content/uploads/gif/crying-96.gif" alt="Triste">';


                } else {
                    echo '<h1>C\'est Perdu</h1>';
                    echo '<p>Elle vous a bloquer et a porté plainte contre vous la police, </br> Votre famille vous rejette, </br> Vous avez déshérité et vous finissez en prison.</p>';
                    echo '<img class="meme" src="https://media1.tenor.com/m/72NJfF7QTl4AAAAC/working-get-to-work.gif" alt="Prison">';
                }
    ?>
    <h1>Hall of Fame</h1>
    <p>Souhaitez vous sauvegarder votre score ? </br> Il est de : <?php echo $_SESSION['score'] ?></p>
    <form class="bouton" action="process.php" method="post">
        <input type="submit" value="Ajouter votre score au Hall of Fame">
    </form>

    <?php
    // Affiche le contenu du fichier texte
    $hallOfFameContent = file_get_contents("hall_of_fame.txt");
    echo '<p>'.nl2br($hallOfFameContent).'</p>';
    ?>
<?php
include('includes/footer.php');
?>