</header>
<body>
    <nav>
        <ul>
            <?php
            if (basename($_SERVER['PHP_SELF']) == 'q1.php') {
                echo '<button class="btn"><span class="icon"><svg viewBox="0 0 175 80" width="40" height="40"><rect width="80" height="15" fill="#f0f0f0" rx="10"></rect><rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect><rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect></svg></span><span class="text" onclick="toggleDiv()">INFO</span></button> </br>';
            }
            ?>
            <li> <a href="<?= $root ?>session_crash.php">Index</a></li>
        </ul>
    </nav>