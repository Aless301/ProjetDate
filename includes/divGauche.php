<?php
    echo '<p>Votre Score : '.$_SESSION['score'].'</p>';
?>

<div class="progress-bar">
    <div class="progress-bar-inner" id="progressBar"></div>
    <span id="progressLabel">0%</span>
</div>

<script>
    // Simuler l'augmentation du score
    let currentScore = 0;
    const targetScore = 100;
    const progressBar = document.getElementById('progressBar');
    const progressLabel = document.getElementById('progressLabel');

    function updateProgressBar() {
        currentScore += 5; // Augmentation arbitraire du score
        const progressPercentage = (currentScore / targetScore) * <?php echo $_SESSION['score'] ?>;
        progressBar.style.width = `${progressPercentage}%`;
        progressLabel.innerText = `${progressPercentage.toFixed(0)}%`;

        // Arrêter la progression une fois le score cible atteint
        if (currentScore < targetScore) {
            requestAnimationFrame(updateProgressBar);
        }
    }

    // Lancer la progression
    updateProgressBar();
</script>

<?php
    echo '<p>'.$_SESSION['pseudo'].'</p>'
?>

<h1>Hall of Fame</h1>
    <?php
    // Affiche le contenu du fichier texte
    $hallOfFameContent = file_get_contents("hall_of_fame.txt");
    echo '<p>'.nl2br($hallOfFameContent).'</p>';
    ?>