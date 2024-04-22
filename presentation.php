<?php
include('includes/header1.php');
include('includes/header2.php'); ?>

<style>
    .btn {
        width: 150px;
        height: 50px;
        border-radius: 5px;
        border: none;
        transition: all 0.5s ease-in-out;
        font-size: 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: 600;
        display: flex;
        align-items: center;
        background: #040f16;
        color: #f5f5f5;
        float: right;
        margin: 5px 5px 5px 5px;
    }

    .btn:hover {
        box-shadow: 0 0 20px 0px #2e2e2e3a;
    }

    .btn .icon {
        position: absolute;
        height: 40px;
        width: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.5s;
    }

    .btn .text {
        transform: translateX(55px);
    }

    .btn:hover .icon {
        width: 175px;
    }

    .btn:hover .text {
        transition: all 0.5s;
        opacity: 0;
    }

    .btn:focus {
        outline: none;
    }

    .btn:active .icon {
        transform: scale(0.85);
    }

    /*Bouton Présentation*/

    .button {
        -webkit-appearance: none;
        appearance: none;
        position: relative;
        border-width: 0;
        padding: 0 8px 12px;
        min-width: 10em;
        box-sizing: border-box;
        background: transparent;
        font: inherit;
        cursor: pointer;
    }

    .button-top {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 0;
        padding: 8px 16px;
        transform: translateY(0);
        text-align: center;
        color: #fff;
        text-shadow: 0 -1px rgba(0, 0, 0, .25);
        transition-property: transform;
        transition-duration: .2s;
        -webkit-user-select: none;
        user-select: none;
    }

    .button:active .button-top {
        transform: translateY(6px);
    }

    .button-top::after {
        content: '';
        position: absolute;
        z-index: -1;
        border-radius: 4px;
        width: 100%;
        height: 100%;
        box-sizing: content-box;
        background-image: radial-gradient(#cd3f64, #9d3656);
        text-align: center;
        color: #fff;
        box-shadow: inset 0 0 0px 1px rgba(255, 255, 255, .2), 0 1px 2px 1px rgba(255, 255, 255, .2);
        transition-property: border-radius, padding, width, transform;
        transition-duration: .2s;
    }

    .button:active .button-top::after {
        border-radius: 6px;
        padding: 0 2px;
    }

    .button-bottom {
        position: absolute;
        z-index: -1;
        bottom: 4px;
        left: 4px;
        border-radius: 8px / 16px 16px 8px 8px;
        padding-top: 6px;
        width: calc(100% - 8px);
        height: calc(100% - 10px);
        box-sizing: content-box;
        background-color: #803;
        background-image: radial-gradient(4px 8px at 4px calc(100% - 8px), rgba(255, 255, 255, .25), transparent), radial-gradient(4px 8px at calc(100% - 4px) calc(100% - 8px), rgba(255, 255, 255, .25), transparent), radial-gradient(16px at -4px 0, white, transparent), radial-gradient(16px at calc(100% + 4px) 0, white, transparent);
        box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.5), inset 0 -1px 3px 3px rgba(0, 0, 0, .4);
        transition-property: border-radius, padding-top;
        transition-duration: .2s;
    }

    .button:active .button-bottom {
        border-radius: 10px 10px 8px 8px / 8px;
        padding-top: 0;
    }

    .button-base {
        position: absolute;
        z-index: -2;
        top: 4px;
        left: 0;
        border-radius: 12px;
        width: 100%;
        height: calc(100% - 4px);
        background-color: rgba(0, 0, 0, .15);
        box-shadow: 0 1px 1px 0 rgba(255, 255, 255, .75), inset 0 2px 2px rgba(0, 0, 0, .25);
    }
</style>

<h1>Le but du jeu :</h1>
<p>Le but est assez simple, le jeu "Projet Date" conciste à draguer une personne. </br> Vous devez repondre à des questions, certaines vous rapportent des points, d'autre vous en font perde. </br> Il y a aussi des questions Green Flag, qui vous font gagner plus de points. Et les questions Red Flag qui vous font perdre la partie directement.<br></p>

<button onclick="window.location.href = 'q1.php';" type="button" class="button">
    <div class="button-top">
        <p>Jouer !</p>
    </div>
    <div class="button-bottom"></div>
    <div class="button-base"></div>
</button>

<?php
include('includes/footer.php')
?>