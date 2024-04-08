<script>
    var selectedBody = "<?php echo isset($_SESSION['corps_affichee']) ? $_SESSION['corps_affichee'] : ''; ?>";

    function nextQuestion() {
        var currentQuestion = document.getElementById('currentQuestion').value;
        document.getElementById('question' + currentQuestion).style.display = 'none';

        currentQuestion++;

        
        document.getElementById('question' + currentQuestion).style.display = 'block';
        document.getElementById('currentQuestion').value = currentQuestion;
    }
</script>

<?php
include('../includes/header.php');

if(isset($_POST['corps'])){
    $corps = $_POST['corps'];

    echo "<h2>Informations spécifiques pour la tête sélectionnée :</h2>";

    if($corps =='corps1'){
            echo "<h3>Informations pour la tête 1 :</h3>";
            echo "<form method='post' action='carteid.php' id='formQuestions'>";
            echo "<input type='hidden' id='currentQuestion' name='currentQuestion' value='1'>"; // Pour suivre la question actuelle
            echo "<div id='question1'>";
            echo "<label for='nom'>Nom :</label><br>";
            echo "<input type='text' id='nom' name='nom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question2' style='display:none;'>";
            echo "<label for='prenom'>Prénom :</label><br>";
            echo "<input type='text' id='prenom' name='prenom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question3' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<input type='text' id='sexe' name='sexe'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question4' style='display:none;'>";
            echo "<label for='nationalite'>Nationalité :</label><br>";
            echo "<input type='text' id='nationalite' name='nationalite'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question5' style='display:none;'>";
            echo "<label for='date_naissance'>Date de naissance :</label><br>";
            echo "<input type='date' id='date_naissance' name='date_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question6' style='display:none;'>";
            echo "<label for='lieu_naissance'>Lieu de naissance :</label><br>";
            echo "<input type='text' id='lieu_naissance' name='lieu_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question7' style='display:none;'>";
            echo "<label for='date_expiration'>Date d'expiration :</label><br>";
            echo "<input type='date' id='date_expiration' name='date_expiration'><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
    }
    elseif($corps=='corps2'){
            echo "<h3>Informations pour la tête 2 :</h3>";
            echo "<form method='post' action='carteid.php' id='formQuestions'>";
            echo "<input type='hidden' id='currentQuestion' name='currentQuestion' value='1'>"; // Pour suivre la question actuelle
            echo "<div id='question1'>";
            echo "<label for='date_creation'>Date de création :</label><br>";
            echo "<input type='date' id='date_creation' name='date_creation'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question2' style='display:none;'>";
            echo "<label for='date_expiration'>Date d'expiration :</label><br>";
            echo "<input type='date' id='date_expiration' name='date_expiration'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question3' style='display:none;'>";
            echo "<label for='date_naissance'>Date de naissance :</label><br>";
            echo "<input type='date' id='date_naissance' name='date_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question4' style='display:none;'>";
            echo "<label for='numero_serie'>Numéro de série :</label><br>";
            echo "<input type='number' id='numero_serie' name='numero_serie'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question5' style='display:none;'>";
            echo "<label for='lieu_naissance'>Lieu de naissance :</label><br>";
            echo "<input type='text' id='lieu_naissance' name='lieu_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question6' style='display:none;'>";
            echo "<label for='lieu_delivrance'>Lieu de délivrance :</label><br>";
            echo "<input type='text' id='lieu_delivrance' name='lieu_delivrance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question7' style='display:none;'>";
            echo "<label for='prenom'>Prénom :</label><br>";
            echo "<input type='text' id='prenom' name='prenom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question8' style='display:none;'>";
            echo "<label for='nom'>Nom :</label><br>";
            echo "<input type='text' id='nom' name='nom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question9' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<input type='text' id='sexe' name='sexe'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question10' style='display:none;'>";
            echo "<label for='groupe_sanguin'>Groupe sanguin :</label><br>";
            echo "<input type='text' id='groupe_sanguin' name='groupe_sanguin'><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
    }
    elseif($corps=='corps3'){
            echo "<h3>Informations pour la tête 3 :</h3>";
            echo "<form method='post' action='carteid.php' id='formQuestions'>";
            echo "<input type='hidden' id='currentQuestion' name='currentQuestion' value='1'>"; // Pour suivre la question actuelle
            echo "<div id='question1'>";
            echo "<label for='nom'>Nom :</label><br>";
            echo "<input type='text' id='nom' name='nom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question2' style='display:none;'>";
            echo "<label for='prenom'>Prénom :</label><br>";
            echo "<input type='text' id='prenom' name='prenom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question3' style='display:none;'>";
            echo "<label for='date_naissance'>Date de naissance :</label><br>";
            echo "<input type='date' id='date_naissance' name='date_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question4' style='display:none;'>";
            echo "<label for='lieu_naissance'>Lieu de naissance :</label><br>";
            echo "<input type='text' id='lieu_naissance' name='lieu_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question5' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<input type='text' id='sexe' name='sexe'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question6' style='display:none;'>";
            echo "<label for='nom_pere'>Nom du père :</label><br>";
            echo "<input type='text' id='nom_pere' name='nom_pere'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            echo "<div id='question7' style='display:none;'>";
            echo "<label for='nom_mere'>Nom de la mère :</label><br>";
            echo "<input type='text' id='nom_mere' name='nom_mere'><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
    }
    else {
    echo "<p>Aucune sélection de tête n'a été faite.</p>";
}
echo "</form>"; // Fermez le formulaire
}

include('../includes/footer.php');
?>

