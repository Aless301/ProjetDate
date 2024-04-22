<?php
include('includes/header1.php');
include('includes/header2.php');
?>
<div class="divLogin">
  <?php


  if ($_SESSION["score"] > 100) {
    echo '<h1>C\'est Gagné !</h1>';
    echo '<p>CHAMPIOOON </br> Ton score est de ' . $_SESSION["score"] . ' Bien joué !</p>';
    echo '<img class="meme" src="https://www.gif-maniac.com/gifs/53/53118.gif" alt="Trop Cooool!">';
    echo '<audio src="https://youtu.be/48QA4s2FRE8"></audio>';
  } elseif ($_SESSION["score"] < 100 && $_SESSION["score"] > 0) {
    echo '<h1>C\'est pas Gagné, mais c\'est pas Perdu !</h1>';
    echo '<p>This is the friendzone</p>';
    echo '<img class="meme" src="https://usagif.com/wp-content/uploads/gif/crying-96.gif" alt="Triste">';
  } elseif ($_SESSION['score'] < 0) {
    echo '<h1>C\'est Perdu</h1>';
    echo '<p>Elle vous a bloqué et a porté plainte contre vous à la police, </br> Votre famille vous rejette, </br> Vous avez été déshérité et vous finissez en prison.</p>';
    echo '<img class="meme" src="https://media1.tenor.com/m/72NJfF7QTl4AAAAC/working-get-to-work.gif" alt="Prison">';
  }
  ?>
  <h1>Hall of Fame</h1>
  <?php
  $name = $_SESSION['pseudo'];
  $score = $_SESSION['score'];

  $file = fopen("score.txt", "a");

  fwrite($file, "$name;$score\n");

  fclose($file);

  $scores = file("score.txt", FILE_IGNORE_NEW_LINES);

  function compare($a, $b)
  {
    return explode(";", $b)[1] - explode(";", $a)[1];
  }

  usort($scores, "compare");

  for ($i = 0; $i < 5; $i++) {
    if (isset($scores[$i])) {
      list($name, $score) = explode(";", $scores[$i]);
      echo "<p>$name : $score</p>";
    }
  }
  ?>
  <p>______________________________________________________________________________________________________</p>
  <?php
  for ($i = 6; $i <500; $i++) {
    if (isset($scores[$i])) {
      list($name, $score) = explode(";", $scores[$i]);
      echo "<p>$name : $score</p>";
    }
  }
  ?>
</div>
<?php
include('includes/footer.php');
?>