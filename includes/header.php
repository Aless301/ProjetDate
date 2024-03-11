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
    <link rel="icon" type="image/x-icon" href="../logo.png">
</head>
<body>
<nav>
    <img style="float: right;" src="../logo.png" alt="">
    <ul>
        <li><a href="../index.php">Index</a></li>
        <li><a href="session_crash.php">.</a></li>
        <li><a href="process.php">.</a></li>
    </ul>
</nav>

<script>
        // Fonction pour enregistrer la position de défilement
        function saveScrollPosition() {
            localStorage.setItem('scrollPosition', window.scrollY);
        }

        // Fonction pour restaurer la position de défilement
        function restoreScrollPosition() {
            var scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition !== null) {
                window.scrollTo(0, parseInt(scrollPosition));
            }
        }

        // Attacher des gestionnaires d'événements pour enregistrer et restaurer la position de défilement
        window.addEventListener('beforeunload', saveScrollPosition);
        window.addEventListener('load', restoreScrollPosition);
    </script>