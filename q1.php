<?php
include('includes/header1.php');
include('includes/header2.php'); 
?>
<?php
if(!isset($_POST['q1'])){
    echo '
<div class="bubbleQ">
    <p>Tu viens d\'arriver devant sa porte.</p>
</div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veut tu lui dire pour commencer la conversation ? </br></br></p>
        </legend>

        <label for="reponse1">
            <p>"Holà misstinguette, comment tu vas ?" ?</p>
        </label>
        <input type="radio" id="r1" name="r1" value="1">

        <label for="reponse2">
            <p>"Salut ça va ?" ?</p>
        </label>
        <input type="radio" id="r2" name="r2" value="2">

        <label for="reponse3">
            <p>"Ah ouais t\'es moins belle que sur ta photo." ?</p>
        </label>
        <input type="radio" id="r3" name="r3" value="3">

        <label for="rien"></br></label>
        <input type="hidden" id="q1" name="q1" value="q1">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}
if (isset($_POST['r1'])) {
    $_SESSION['r1'] = $_POST['r1'];
} elseif (isset($_POST['r2'])) {
    $_SESSION['r2'] = $_POST['r2'];
} elseif (isset($_POST['r3'])) {
    $_SESSION['r3'] = $_POST['r3'];
}

if (isset($_SESSION['r1'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Holà misstinguette, comment tu vas ? </p> </div>';
}
if (isset($_SESSION['r2'])) {
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Salut ça va ? </p> </div>';
}
if (isset($_SESSION['r3'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Ah ouais t\'es moins belle que sur ta photo. </p> </div>';
}

if (isset($_SESSION['r1'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut monsieur, aussi beau que sur ta photo. </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 5;
}

if (isset($_SESSION['r2'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Salut.</p> </div>';
}
if (isset($_SESSION['r3'])) {
    $_SESSION['score'] = $_SESSION['score'] - 9999999999999;
    header("Location: findepage.php");
    exit;
}
?>

<?php
if (isset($_POST['q1'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>

    <div class="bubbleQ">
        <form action="q1.php" method="post">
            <legend>
                <p>Que veux tu lui repondre ? </br></br></p>
            </legend>

            <label for="reponse1">
                <p>"Oui " ?</p>
            </label>
            <input type="radio" id="r4" name="r4" value="4">

            <label for="reponse2">
                <p>"Si tu me le permets" ?</p>
            </label>
            <input type="radio" id="r5" name="r5" value="5">

            <label for="reponse3">
                <p>"Non merci, ça va aller" ?</p>
            </label>
            <input type="radio" id="r6" name="r6" value="6">

            <label for="rien"></br></label>
            <input type="hidden" id="q2" name="q2" value="q2">
            <input class="bouton" type="submit" value="↪">
        </form>
    </div>';
}


if (isset($_POST['r4'])) {
    $_SESSION['r4'] = $_POST['r4'];
} elseif (isset($_POST['r5'])) {
    $_SESSION['r5'] = $_POST['r5'];
} elseif (isset($_POST['r6'])) {
    $_SESSION['r6'] = $_POST['r6'];
}

if (isset($_SESSION['r4'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui. </p> </div>';
}
if (isset($_SESSION['r5'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Si tu me le permets. </p> </div>';
}
if (isset($_SESSION['r6'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux rentrer ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Non merci, ça va aller. </p> </div>';
}

if (isset($_SESSION['r4'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
} elseif (isset($_SESSION['r5'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller entre ! </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 5;
} elseif (isset($_SESSION['r6'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ah ! </br> <img style="border-radius: 20px;" src="images/ah.png" alt="Denis Brognart Ah"> </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 5;
}
?>

<?php
if (isset($_POST['q2'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu es très proche de ta famille ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu lui repondre ? </br></br></p>
        </legend>

        <label for="reponse1"><p>"Non, j\'ai coupé les liens" ?</p></label>
        <input type="radio" id="r7" name="r7" value="7">

        <label for="reponse2"><p>"Oui et non, car on ne se voit pas trop" ?</p></label>
        <input type="radio" id="r8" name="r8" value="8">

        <label for="reponse3"><p>"Oui je suis très proche et au petit soin" ?</p></label>
        <input type="radio" id="r9" name="r9" value="9">

        <label for="rien"></br></label>
        <input type="hidden" id="q3" name="q3" value="q3">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r7'])) {
    $_SESSION['r7'] = $_POST['r7'];
} elseif (isset($_POST['r8'])) {
    $_SESSION['r8'] = $_POST['r8'];
} elseif (isset($_POST['r9'])) {
    $_SESSION['r9'] = $_POST['r9'];
}

if (isset($_SESSION['r7'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu es très proche de ta famille ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Non, j\'ai couper les liens. </p> </div>';
}
if (isset($_SESSION['r8'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu es très proche de ta famille ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Oui et non, car on ne se voit pas trop. </p> </div>';
}
if (isset($_SESSION['r9'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu es très proche de ta famille ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, je suis très proche et au petit soin. </p> </div>';
}

if (isset($_SESSION['r7'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Désolé, mais si tu ne respectes pas ta famille, c\'est non ! </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 5;
}
if (isset($_SESSION['r8'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Okok. </p> </div>';
}
if (isset($_SESSION['r9'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Super, j\'adore les garçons cannards !</p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 5;
}
?>

<?php
if (isset($_POST['q3'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>T\'aimes bien la musique ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu lui repondre ?</p>
        </legend>

        <label for="reponse1"><p>"J\'aime le rock country et le rap indien." ?</p></label>
        <input type="radio" id="r10" name="r10" value="10">

        <label for="reponse2"><p>"J\'aime les musiques de soirées." ?</p></label>
        <input type="radio" id="r11" name="r11" value="11">

        <label for="reponse3"><p>"Oui, j\'aime le jazz." ?</p></label>
        <input type="radio" id="r12" name="r12" value="12">


        <label for="rien"></br></label>
        <input type="hidden" id="q4" name="q4" value="q4">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r10'])) {
    $_SESSION['r10'] = $_POST['r10'];
} elseif (isset($_POST['r11'])) {
    $_SESSION['r11'] = $_POST['r11'];
} elseif (isset($_POST['r12'])) {
    $_SESSION['r12'] = $_POST['r12'];
}

if (isset($_SESSION['r10'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>T\'aimes bien la musique ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> J\'aime le rock country et le rap indien. </p> </div>';
}
if (isset($_SESSION['r11'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>T\'aimes bien la musique ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> J\'aime les musiques de soirées. </p> </div>';
}
if (isset($_SESSION['r12'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>T\'aimes bien la musique ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, j\'aime le jazz. </p> </div>';
}

if (isset($_SESSION['r10'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Tant pis, on va manger. </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 3;
} elseif (isset($_SESSION['r11'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Okok, sympa. </p> </div>';
} elseif (isset($_SESSION['r12'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Lydia met de la musique jazzy et va manger."</p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
}
?>

<?php
if (isset($_POST['q4'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>C\'est quoi ton style vestimentaire ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu lui répondre ?</p>
        </legend>

        <label for="reponse1"><p>"Je m\'habille en old money." ?</p></label>
        <input type="radio" id="r32" name="r32" value="32">

        <label for="reponse2"><p>"Je suis fashion week du streetwear." ?</p></label>
        <input type="radio" id="r33" name="r33" value="33">

        <label for="reponse3"><p>"Je m\'habille gothique." ?</p></label>
        <input type="radio" id="r34" name="r34" value="34">

        <label for="rien"></br></label>
        <input type="hidden" id="q5" name="q5" value="q5">        
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r32'])) {
    $_SESSION['r32'] = $_POST['r32'];
} elseif (isset($_POST['r33'])) {
    $_SESSION['r33'] = $_POST['r33'];
} elseif (isset($_POST['r34'])) {
    $_SESSION['r34'] = $_POST['r34'];
}

if (isset($_SESSION['r32'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>C\'est quoi ton style vestimentaire ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Je m\'habille en old money. </p> </div>';
}
if (isset($_SESSION['r33'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>C\'est quoi ton style vestimentaire ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Je suis fashion week du streetwear. </p> </div>';
}
if (isset($_SESSION['r34'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>C\'est quoi ton style vestimentaire ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Je m\'habille gothique. </p> </div>';
}

if (isset($_SESSION['r32'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Trop sytlé ! </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
} elseif (isset($_SESSION['r33'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Un peu nul le streetwear.. </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 3;
} elseif (isset($_SESSION['r34'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> C\'est cool !</p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 5;
}
?>

<?php
if (isset($_POST['q5'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
        <p>Que veux tu lui répondre ?</p>
        </legend>

        <label for="reponse1"><p>"Oui, j\'ai fait Top Chef Junior en Franche-Comté." ?</p></label>
        <input type="radio" id="r14" name="r14" value="14">

        <label for="reponse2"><p>"La place de la femme c\'est à la cuisine." ?</p></label>
        <input type="radio" id="r15" name="r15" value="15">

        <label for="reponse3"><p>"J\'ai déjà fait des pâtes." ?</p></label>
        <input type="radio" id="r16" name="r16" value="16">

        <label for="rien"></br></label>
        <input type="hidden" id="q6" name="q6" value="q6">        
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r14'])) {
    $_SESSION['r14'] = $_POST['r14'];
} elseif (isset($_POST['r15'])) {
    $_SESSION['r15'] = $_POST['r15'];
} elseif (isset($_POST['r16'])) {
    $_SESSION['r16'] = $_POST['r16'];
}

if (isset($_SESSION['r14'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, j\'ai fait Top Chef Junior en Franche-Comté. </p> </div>';
}
if (isset($_SESSION['r15'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> La place de la femme c\'est à la cuisine. </p> </div>';
}
if (isset($_SESSION['r16'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu sais cuisiner ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>  J\'ai déjà fait des pâtes. </p> </div>';
}

if (isset($_SESSION['r14'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "ils cuisinent à deux." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
} elseif (isset($_SESSION['r15'])) {
    $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    header("Location: findepage.php");
} elseif (isset($_SESSION['r16'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Ca va, ca passe. </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 2;
}
?>

<?php
if (isset($_POST['q6'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux du vin avec ton repas ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu lui répondre ?</p>
        </legend>

        <label for="reponse1"><p>"Un verre." ?</p></label>
        <input type="radio" id="r17" name="r17" value="17">

        <label for="reponse2"><p>"Deux verres." ?</p></label>
        <input type="radio" id="r18" name="r18" value="18">

        <label for="reponse3"><p>"Trois verres." ?</p></label>
        <input type="radio" id="r19" name="r19" value="19">

        <label for="rien"></br></label>
        <input type="hidden" id="q7" name="q7" value="q7"> 
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r17'])) {
    $_SESSION['r17'] = $_POST['r17'];
} elseif (isset($_POST['r18'])) {
    $_SESSION['r18'] = $_POST['r18'];
} elseif (isset($_POST['r19'])) {
    $_SESSION['r19'] = $_POST['r19'];
}

if (isset($_SESSION['r17'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux du vin avec ton repas ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Un verre. </p> </div>';
}
if (isset($_SESSION['r18'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux du vin avec ton repas ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Deux verres. </p> </div>';
}
if (isset($_SESSION['r19'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux du vin avec ton repas ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>  Trois verres. </p> </div>';
}

if (isset($_SESSION['r17'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Tu sers un verre." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
} elseif (isset($_SESSION['r18'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Tu sers deux verres et elle pense que t\'est un alcolo." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 5;
} elseif (isset($_SESSION['r19'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Tu sers trois verres et elle pense que t\'est un alcolo." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 5;
}
?>

<?php
if (isset($_POST['q7'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux faire quoi ?</p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu faire ?</p>
        </legend>

        <label for="reponse1"><p>ACTION : regarder un film, tu t\'endors sur le côté du canapé.</p></label>
        <input type="radio" id="r20" name="r20" value="20">

        <label for="reponse2"><p>ACTION : chifoumi.</p></label>
        <input type="radio" id="r21" name="r21" value="21">

        <label for="reponse3"><p>ACTION : faire un slow avec la musique seulement.</p></label>
        <input type="radio" id="r22" name="r22" value="22">

        <label for="rien"></br></label>
        <input type="hidden" id="q8" name="q8" value="q8"> 
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r20'])) {
    $_SESSION['r20'] = $_POST['r20'];
} elseif (isset($_POST['r21'])) {
    $_SESSION['r21'] = $_POST['r21'];
} elseif (isset($_POST['r22'])) {
    $_SESSION['r22'] = $_POST['r22'];
}

if (isset($_SESSION['r20'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux faire quoi ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Action : regarder un film. </p> </div>';
}
if (isset($_SESSION['r21'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux faire quoi ?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Action : chifoumi. </p> </div>';
}
if (isset($_SESSION['r22'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu veux faire quoi ?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>  Action : faire un slow avec la musique seulement. </p> </div>';
}

if (isset($_SESSION['r20'])) {
    $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    header("Location: findepage.php");
} elseif (isset($_SESSION['r21'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Elle s\'amuse bien et te propose d\'aller dans le jardin </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 2;
} elseif (isset($_SESSION['r22'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : slow, elle est ravie et te propose de sortir en ville en voiture </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
}
?>

<?php
if (isset($_POST['q8'])) {
    echo '

<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu penses que tu peux m\'offrir cette robe ? </p></div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veux tu faire ?</p>
        </legend>

        <label for="reponse1"><p>"Oui, c\'est 399€ seulement, aucun problème." ?</p></label>
        <input type="radio" id="r23" name="r23" value="23">

        <label for="reponse2"><p>"Non, j\'économise pour acheter des Nitros à des e-girls sur Discord, désolé." ?</p></label>
        <input type="radio" id="r24" name="r24" value="24">

        <label for="reponse3"><p>"J\'aurais pu, mais la robe est loin d\'être suffisamment belle pour toi." ?</p></label>
        <input type="radio" id="r25" name="r25" value="25">

        <label for="rien"></br></label>
        <input type="hidden" id="q9" name="q9" value="q9"> 
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r23'])) {
    $_SESSION['r23'] = $_POST['r23'];
} elseif (isset($_POST['r24'])) {
    $_SESSION['r24'] = $_POST['r24'];
} elseif (isset($_POST['r25'])) {
    $_SESSION['r25'] = $_POST['r25'];
}

if (isset($_SESSION['r23'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu penses que tu peux m\'offrir cette robe ? </p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Oui, c\'est 399€ seulement, aucun problème. </p> </div>';
}
if (isset($_SESSION['r24'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu penses que tu peux m\'offrir cette robe?</p></div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Non, j\'économise pour acheter des Nitros à des e-girls sur Discord, désolé. </p> </div>';
}
if (isset($_SESSION['r25'])) {
    echo '<div class="bubbleG"><div class="arrow left-arrow"></div><p>Tu penses que tu peux m\'offrir cette robe?</p></div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> J\'aurais pu, mais la robe est loin d\'être suffisamment belle pour toi.  </p> </div>';
}
?>

<?php
if (isset($_SESSION['r23'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Elle essaye sa robe et elle est contente" </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 2;
} elseif (isset($_SESSION['r24'])) {
    $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    header("Location: findepage.php");
} elseif (isset($_SESSION['r25'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Elle hesite d\'acheter une robe de marié </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
}
?>

<?php
if (isset($_POST['q9'])) {
    echo '

<div class="bubbleG">
    <div class="arrow left-arrow"></div>
    <p>Elle se fait aborder par un mec du bar</p>
</div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <label for="reponse1"><p>ACTION : lancer un duel de Hip-Hop avec le gars.</p></label>
        <input type="radio" id="r26" name="r26" value="26">

        <label for="reponse2"><p>ACTION : le laisser draguer Lydia.</p></label>
        <input type="radio" id="r27" name="r27" value="27">

        <label for="reponse3"><p>ACTION: lui montrer une photo de Théo Massin.</p></label>
        <input type="radio" id="r28" name="r28" value="28">

        <label for="rien"></br></label>
        <input type="hidden" id="q10" name="q10" value="q10">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r26'])) {
    $_SESSION['r26'] = $_POST['r26'];
} elseif (isset($_POST['r27'])) {
    $_SESSION['r27'] = $_POST['r27'];
} elseif (isset($_POST['r28'])) {
    $_SESSION['r28'] = $_POST['r28'];
}

if (isset($_SESSION['r26'])) {
    echo '<div class="bubbleQ"> <div class="arraw right-arrow"></div> <p>Elle se fait aborder par un mec du bar</p> </div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Tu commences a te battre avec le gars. </p> </div>';
}
if (isset($_SESSION['r27'])) {
    echo '<div class="bubbleQ"> <div class="arraw right-arrow"></div> <p>Elle se fait aborder par un mec du bar</p> </div>';
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> Tu le laisses draguer Lydia. </p> </div>';
}
if (isset($_SESSION['r28'])) {
    echo '<div class="bubbleQ"> <div class="arraw right-arrow"></div> <p>Elle se fait aborder par un mec du bar</p> </div>';
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Tu lui montres une photo de Théo Massin. </p> </div>';
}
?>

<?php
if (isset($_SESSION['r26'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Vous commencez a vous battre et tu gagnes miraculesement." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 15;
} elseif (isset($_SESSION['r27'])) {
    $_SESSION['score'] = $_SESSION['score'] - 9999999999;
    header("Location: findepage.php");
} elseif (isset($_SESSION['r28'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Action : "Il prend peur et commence a fuir a la vue de Théo." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 5;
}
?>

<?php
if (isset($_POST['q10'])) {
    echo '

<div class="bubbleG">
    <div class="arrow left-arrow"></div>
    <p>Merci pour la soirée!</p>
</div>

<div class="bubbleQ">
    <form action="q1.php" method="post">
        <legend>
            <p>Que veut tu faire ?</p>
        </legend>

        <label for="reponse1"><p>Action : lui dire que c\'etait chiant </p></label>
        <input type="radio" id="r29" name="r29" value="29">

        <label for="reponse2"><p>Action : lui faire un bisou sur la joue</p></label>
        <input type="radio" id="r30" name="r30" value="30">

        <label for="reponse3"><p>Action : La pousser dans les ortilles</p></label>
        <input type="radio" id="r31" name="r31" value="31">

        <label for="rien"></br></label>
        <input type="hidden" id="q11" name="q11" value="q11">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r29'])) {
    $_SESSION['r29'] = $_POST['r29'];
} elseif (isset($_POST['r30'])) {
    $_SESSION['r30'] = $_POST['r30'];
} elseif (isset($_POST['r31'])) {
    $_SESSION['r31'] = $_POST['r31'];
}

if (isset($_SESSION['r29'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> "C\'etait chiant "</p> </div>';
}
if (isset($_SESSION['r30'])) {
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p>"ACTION : Tout petit bisou sur la joue."</p> </div>';
}
if (isset($_SESSION['r31'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p>"ACTION : La pousser de la colline."</p> </div>';
}
?>

<?php
if (isset($_SESSION['r29'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p>"Euh tu dégage enfaite." </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] - 4;
} elseif (isset($_SESSION['r30'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Elle te fais un bisous.</p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 10;
} elseif (isset($_SESSION['r31'])) {
    $_SESSION['score'] = $_SESSION['score'] - 99999;
    header("Location: findepage.php");
}
?>

<?php
if (isset($_POST['q11'])) {
    echo '

<div class="bubbleG">
    <div class="arrow left-arrow"></div>
    <p>Tu veux faire quoi?</p>
</div>

<div class="bubbleQ">
    <form action="q1.php" method="post">


        <label for="reponse1"><p>ACTION : aller regarder la lune au telescope</p></label>
        <input type="radio" id="r38" name="r38" value="38">

        <label for="reponse2"><p>ACTION : parler du rayon de braquage des Renault Kangoo</p></label>
        <input type="radio" id="r39" name="r39" value="39">

        <label for="reponse3"><p>ACTION : regarder un live twitch sur une Applewatch</p></label>
        <input type="radio" id="r40" name="r40" value="40">

        <label for="rien"></br></label>
        <input type="hidden" id="q12" name="q12" value="q12">
        <input class="bouton" type="submit" value="↪">
    </form>
</div>';
}

if (isset($_POST['r38'])) {
    $_SESSION['r38'] = $_POST['r38'];
} elseif (isset($_POST['r39'])) {
    $_SESSION['r39'] = $_POST['r39'];
} elseif (isset($_POST['r40'])) {
    $_SESSION['r40'] = $_POST['r40'];
}

if (isset($_SESSION['r38'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> On peut aller regarder la lune au telescope.</p> </div>';
}
if (isset($_SESSION['r39'])) {
    echo '<div class="bubbleD">  <div class="arrow right-arrow"></div> <p> On peut parler de voiture si ça te dérange pas.</p> </div>';
}
if (isset($_SESSION['r40'])) {
    echo '<div class="bubbleD"> <div class="arrow right-arrow"></div> <p> Go regarder un live twitch sur une AppleWatch. </p> </div>';
}
?>

<?php

if (isset($_SESSION['r38'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller go regarder la lune au telescope. </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 8;
} elseif (isset($_SESSION['r39'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Non tkt on peux faire ça ! </p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 8;
} elseif (isset($_SESSION['r40'])) {
    echo '<div class="bubbleG"> <div class="arrow left-arrow"></div> <p> Aller, go regarder un live twitch sur une AppleWatch.</p> </div>';
    $_SESSION['score'] = $_SESSION['score'] + 8;
}
?>

<?php
if(isset($_POST['q12'])){
    echo'
<p style="clear: both;">Votre date est fini Voulez vous voir vos résultat ?</p>
<form style="clear: both;" action="findepage.php">
    <input class="bouton" type="submit" value="Oui">
</form>
<form action="index.php">
    <input class="bouton" type="submit" value="Non">
</form>';
}
?>

<div id="myDiv" class="divGauche">
    <?php
    include('includes/divGauche.php');
    ?>
</div>

<?php
include('includes/footer.php');
?>