<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Date</title>
    <link rel="stylesheet" href="../style.css">
    <link class="logo" rel="icon" type="image/x-icon" href="../images/logo.png">
</head>

<body>
    <nav>
        <ul>
            <?php
            // Vérifier si la page actuelle est q1.php
            if (basename($_SERVER['PHP_SELF']) == 'q1.php') {
                // Afficher le bouton
                echo '<button style="float: left; margin: 5px 5px 5px 5px;" onclick="toggleDiv()"><img src="images/info.png" alt="image d\'info pour afficher ou non la partie de gauche"></button> </br>';
            }
            ?>
            <li><a href="../index.php">Index</a></li>
            <li> <a href="session_crash.php">.</a></li>
        </ul>
    </nav>

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