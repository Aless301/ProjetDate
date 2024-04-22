<?php
echo '<p>Votre Score : ' . $_SESSION['score'] . '</p>';
?>

<div class="progress-bar">
    <div class="progress-bar-inner" id="progressBar"></div>
    <span id="progressLabel">0%</span>
</div>

<script>
    let currentScore = 0;
    const targetScore = 100;
    const progressBar = document.getElementById('progressBar');
    const progressLabel = document.getElementById('progressLabel');

    function updateProgressBar() {
        currentScore += 5;
        const progressPercentage = (currentScore / targetScore) * <?php echo $_SESSION['score'] ?>;
        progressBar.style.width = `${progressPercentage}%`;
        progressLabel.innerText = `${progressPercentage.toFixed(0)}%`;

        if (currentScore < targetScore) {
            requestAnimationFrame(updateProgressBar);
        }
    }

    updateProgressBar();
</script>

<?php
echo '<p>' . $_SESSION['pseudo'] . '</p>'
?>