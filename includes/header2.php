</header>

<script>
    function saveScrollPosition() {
        localStorage.setItem('scrollPosition', window.scrollY);
    }

    function restoreScrollPosition() {
        var scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition !== null) {
            window.scrollTo(0, parseInt(scrollPosition));
        }
    }
    window.addEventListener('beforeunload', saveScrollPosition);
    window.addEventListener('load', restoreScrollPosition);
</script>

<body>
    <nav>
        <ul>
            <?php
            // Vérifier si la page actuelle est q1.php
            if (basename($_SERVER['PHP_SELF']) == 'q1.php') {
                // Afficher le bouton
                echo '<button style="float: left; margin: 5px 5px 5px 5px;" onclick="toggleDiv()"><img src="images/info.jpg" alt="image d\'info pour afficher ou non la partie de gauche"></button> </br>';
            }
            ?>
            <li><a href="<?= $root ?>index.php">Index</a></li>
            <li> <a href="<?= $root ?>session_crash.php">.</a></li>
        </ul>
    </nav>