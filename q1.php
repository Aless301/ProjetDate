<?php
include('includes/header.php');
?>
<?php
$_SESSION['score'] = 0;
?>
<div class="divDroite">

    <div class="bubbleQ">
        <p>Tu viens d'arriver devant sa porte.</p>
    </div>

    <div class="bubbleQ">
        <form action="q1.php" method="post">
            <input type="radio" id="r1" name="r1" value="1">
            <label for="reponse1"><p>Holà misstinguette, comment tu vas ?</p></label><br>

            <input type="radio" id="r2" name="r2" value="2">
            <label for="reponse2"><p>Salut ça va ?</p></label><br>

            <input type="radio" id="r3" name="r3" value="3">
            <label for="reponse3"><p>Ah ouais t'es moins belle que sur ta photo.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>
    <?php
    if (isset($_POST['r1'])) {
        $_SESSION['r1']=$_POST['r1'];
    } elseif (isset($_POST['r2'])) {
        $_SESSION['r2']=$_POST['r2'];
    } elseif (isset($_POST['r3'])) {
        $_SESSION['r3']=$_POST['r3'];
    }
    ?>

<?php
    if (isset($_SESSION['r1'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Holà misstinguette, comment tu vas ? </p> </div>';
    }
    if (isset($_SESSION['r2'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Salut ça va ? </p> </div>';
    }
    if (isset($_SESSION['r3'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Ah ouais t\'es moins belle que sur ta photo. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r1'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut monsieur, aussi beau que sur ta photo. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 5;
    } elseif (isset($_SESSION['r2'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut monsieur, aussi beau que sur ta photo. </p> </div>';
    } if(isset($_SESSION['r3'])) {
        $_SESSION['score'] = $_SESSION['score'] - 9999999999999;
        header("Location: process.php");
        exit;
    }
    ?>

    <div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r4" name="r4" value="4">
            <label for="reponse1"><p>Oui.</p></label><br>

            <input type="radio" id="r5" name="r5" value="5">
            <label for="reponse2"><p>Si tu me le permets.</p></label><br>

            <input type="radio" id="r6" name="r6" value="6">
            <label for="reponse3"><p>Ca va aller.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r4'])) {
        $_SESSION['r4']=$_POST['r4'];
    } elseif (isset($_POST['r5'])) {
        $_SESSION['r5']=$_POST['r5'];
    } elseif (isset($_POST['r6'])) {
        $_SESSION['r6']=$_POST['r6'];
    }
    ?>

<?php
    if (isset($_SESSION['r4'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui. </p> </div>';
    }
    if (isset($_SESSION['r5'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Si tu me le permets. </p> </div>';
    }
    if (isset($_SESSION['r6'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Ca va aller. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r4'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
    } elseif (isset($_SESSION['r5'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 5;
    } elseif (isset($_SESSION['r6'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ah ! </br> <img src="images/ah.png" alt="Denis Brognart Ah"> </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 5;
    }
    ?>

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu es très proche de ta famille ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r7" name="r7" value="7">
            <label for="reponse1"><p>Non, j'ai fais une Jeffrey Dahmer.</p></label><br>

            <input type="radio" id="r8" name="r8" value="8">
            <label for="reponse2"><p>Oui et non, car on ne se voit pas trop.</p></label><br>

            <input type="radio" id="r9" name="r9" value="9">
            <label for="reponse3"><p>Oui je suis très proche et au petit soin.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r7'])) {
        $_SESSION['r7']=$_POST['r7'];
    } elseif (isset($_POST['r8'])) {
        $_SESSION['r8']=$_POST['r8'];
    } elseif (isset($_POST['r9'])) {
        $_SESSION['r9']=$_POST['r9'];
    }
    ?>

<?php
    if (isset($_SESSION['r7'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Non, j\'ai fais une Jefrey Dahmer. </p> </div>';
    }
    if (isset($_SESSION['r8'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Oui et non, car on ne se voit pas trop. </p> </div>';
    }
    if (isset($_SESSION['r9'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, je suis très proche et au petit soin. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r7'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Désolé, mais si tu ne respectes pas ta famille, c\'est non ! </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 5;
    } elseif (isset($_SESSION['r8'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Okok. </p> </div>';
    } elseif (isset($_SESSION['r9'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Super, j\'adore les garçons cannards !</p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 5;
    }
    ?>

<div class="bubbleG"><div class="arrow left-arrow"></div><p>T'aimes bien la musique ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r10" name="r10" value="10">
            <label for="reponse1"><p>J'aime le rock country et le rap indien.</p></label><br>

            <input type="radio" id="r11" name="r11" value="11">
            <label for="reponse2"><p>J'aime les musiques de soirées.</p></label><br>

            <input type="radio" id="r12" name="r12" value="12">
            <label for="reponse3"><p>Oui, j'aime le jazz.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r10'])) {
        $_SESSION['r10']=$_POST['r10'];
    } elseif (isset($_POST['r11'])) {
        $_SESSION['r11']=$_POST['r11'];
    } elseif (isset($_POST['r12'])) {
        $_SESSION['r12']=$_POST['r12'];
    }
    ?>

<?php
    if (isset($_SESSION['r10'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> J\'aime le rock country et le rap indien. </p> </div>';
    }
    if (isset($_SESSION['r11'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> J\'aime les musiques de soirées. </p> </div>';
    }
    if (isset($_SESSION['r12'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, j\'aime le jazz. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r10'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Tant pis, on va manger. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 3;
    } elseif (isset($_SESSION['r11'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Okok, sympa. </p> </div>';
    } elseif (isset($_SESSION['r12'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Lydia met de la musique jazzy et va manger."</p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 2;
    }
    ?>

<div class="bubbleG"><div class="arrow left-arrow"></div><p>C'est quoi ton style vestimentaire ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r10" name="r10" value="10">
            <label for="reponse1"><p>Je m'habille en old money.</p></label><br>

            <input type="radio" id="r11" name="r11" value="11">
            <label for="reponse2"><p>Je suis fashion week du streetwear.</p></label><br>

            <input type="radio" id="r12" name="r12" value="12">
            <label for="reponse3"><p>Je m'habille gothique.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r10'])) {
        $_SESSION['r10']=$_POST['r10'];
    } elseif (isset($_POST['r11'])) {
        $_SESSION['r11']=$_POST['r11'];
    } elseif (isset($_POST['r12'])) {
        $_SESSION['r12']=$_POST['r12'];
    }
    ?>

<?php
    if (isset($_SESSION['r10'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Je m\'habille en old money. </p> </div>';
    }
    if (isset($_SESSION['r11'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Je suis fashion week du streetwear. </p> </div>';
    }
    if (isset($_SESSION['r12'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Je m\'habille gothique. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r10'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Trop sytlé ! </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 4;
    } elseif (isset($_SESSION['r11'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Un peu nul le streetwear.. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 3;
    } elseif (isset($_SESSION['r12'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> C\'est cool !</p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 1;
    }
    ?>

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r14" name="r14" value="14">
            <label for="reponse1"><p>Oui, j'ai fait Top Chef Junior en Franche-Comté.</p></label><br>

            <input type="radio" id="r15" name="r15" value="15">
            <label for="reponse2"><p>La place de la femme c'est à la cuisine.</p></label><br>

            <input type="radio" id="r16" name="r16" value="16">
            <label for="reponse3"><p>J'ai déjà fait des pâtes.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r14'])) {
        $_SESSION['r14']=$_POST['r14'];
    } elseif (isset($_POST['r15'])) {
        $_SESSION['r15']=$_POST['r15'];
    } elseif (isset($_POST['r16'])) {
        $_SESSION['r16']=$_POST['r16'];
    }
    ?>

<?php
    if (isset($_SESSION['r14'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, j\'ai fait Top Chef Junior en Franche-Comté. </p> </div>';
    }
    if (isset($_SESSION['r15'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> La place de la femme c\'est à la cuisine. </p> </div>';
    }
    if (isset($_SESSION['r16'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>  J\'ai déjà fait des pâtes. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r14'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "ils cuisinent à deux." </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 8;
    } elseif (isset($_SESSION['r15'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> elle se vexe et dégage le main caractère. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    } elseif (isset($_SESSION['r16'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ca va, ca passe. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 2;
    }
    ?>

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>
    
    <div class="bubbleQ">
    <form action="q1.php" method="post">
            <input type="radio" id="r14" name="r14" value="14">
            <label for="reponse1"><p>Oui, j'ai fait Top Chef Junior en Franche-Comté.</p></label><br>

            <input type="radio" id="r15" name="r15" value="15">
            <label for="reponse2"><p>La place de la femme c'est à la cuisine.</p></label><br>

            <input type="radio" id="r16" name="r16" value="16">
            <label for="reponse3"><p>J'ai déjà fait des pâtes.</p></label><br>

            <input class="bouton" type="submit" value="↪">
        </form>
    </div>

    <?php
    if (isset($_POST['r14'])) {
        $_SESSION['r14']=$_POST['r14'];
    } elseif (isset($_POST['r15'])) {
        $_SESSION['r15']=$_POST['r15'];
    } elseif (isset($_POST['r16'])) {
        $_SESSION['r16']=$_POST['r16'];
    }
    ?>

<?php
    if (isset($_SESSION['r14'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, j\'ai fait Top Chef Junior en Franche-Comté. </p> </div>';
    }
    if (isset($_SESSION['r15'])) {
        echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> La place de la femme c\'est à la cuisine. </p> </div>';
    }
    if (isset($_SESSION['r16'])) {
        echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>  J\'ai déjà fait des pâtes. </p> </div>';
    }
    ?>

    <?php
    if (isset($_SESSION['r14'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "ils cuisinent à deux." </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 8;
    } elseif (isset($_SESSION['r15'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> elle se vexe et dégage le main caractère. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    } elseif (isset($_SESSION['r16'])) {
        echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ca va, ca passe. </p> </div>';
        $_SESSION['score'] = $_SESSION['score'] + 2;
    }
    ?>

</div>
</div>
<div class="divGauche">
    <?php
    include('includes/divGauche.php');
    ?>
</div>
<?php
include('includes/footer.php');
?>