<?php
include('../includes/header1.php');
include('../Includes/header2.php');

if(isset($_POST['corps'])){
    $corps = $_POST['corps'];
    echo "<h2>Informations spécifiques pour la tête sélectionnée :</h2>";
    ?>
<div class='divLogin'>

<?php
    if ($corps =='corps1' || $corps =='corps4' || $corps =='corps5' ||$corps =='corps6' || $corps =='corps9'){
            echo "<h3>Informations pour ce choix :</h3>";
            echo "<form method='post' action='../q1.php' id='formQuestions'>";
            echo "<input type='hidden' id='currentQuestion' name='currentQuestion' value='1'>"; // Pour suivre la question actuelle

            echo "<div id='question1'>";
            echo "<label for='nom'><p>Nom :</p></label><br>";
            echo "<input type='text' id='nom' name='nom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question2' style='display:none;'>";
            echo "<label for='prenom'><p>Prénom :</p></label><br>";
            echo "<input type='text' id='prenom' name='prenom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question3' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<select id='sexe' name='sexe'>";
            echo "<option value=''>Choisissez votre sexe</option>";
            echo "<option value='male'>Masculin</option>";
            echo "<option value='feminin'>Féminin</option>";
            echo "</select><br>";
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
            echo "<label for='numero_serie'>Numéro de série :</label><br>";
            $numero_serie = rand(100000, 999999); // Génère un nombre aléatoire entre 100000 et 999999
            echo "<input type='text' id='numero_serie' name='numero_serie' value='$numero_serie' readonly><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question8' style='display:none;'>";
            echo "<label for='date_expiration'>Date d'expiration :</label><br>";
            // Calcul de la date d'expiration (6 ans plus tard)
            $date_expiration = date('Y-m-d', strtotime('+6 years'));
            echo "<input type='date' id='date_expiration' name='date_expiration' value='$date_expiration' readonly><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
}
    elseif($corps=='corps2' || $corps =='corps8'){
            echo "<h3>Informations pour ce choix :</h3>";
            echo "<form method='post' action='../q1.php' id='formQuestions'>";
            echo "<input type='hidden' id='currentQuestion' name='currentQuestion' value='1'>"; // Pour suivre la question actuelle
            
            echo "<div id='question1'>";
            echo "<label for='Prenom'>Prenom :</label><br>";
            echo "<input type='text' id='prenom' name='prenom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";


            echo "<div id='question2' style='display:none;'>";
            echo "<label for='nom'>Nom :</label><br>";
            echo "<input type='text' id='nom' name='nom'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            
            echo "<div id='question3' style='display:none;'>";
            echo "<label for='date_creation'>Date de création :</label><br>";
            $date_creation = date('Y-m-d');
            echo "<input type='date' id='date_creation' name='date_creation' value='$date_creation' readonly><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question4' style='display:none;'>";
            echo "<label for='date_expiration'>Date d'expiration :</label><br>";
            $date_expiration = date('Y-m-d', strtotime('+6 years'));
            echo "<input type='date' id='date_expiration' name='date_expiration' value='$date_expiration' readonly><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question5' style='display:none;'>";
            echo "<label for='date_naissance'>Date de naissance :</label><br>";
            echo "<input type='date' id='date_naissance' name='date_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question6' style='display:none;'>";
            echo "<label for='numero_serie'>Numéro de série :</label><br>";
            $numero_serie = rand(100000, 999999); // Génère un nombre aléatoire entre 100000 et 999999
            echo "<input type='text' id='numero_serie' name='numero_serie' value='$numero_serie' readonly><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question7' style='display:none;'>";
            echo "<label for='lieu_naissance'>Lieu de naissance :</label><br>";
            echo "<input type='text' id='lieu_naissance' name='lieu_naissance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question8' style='display:none;'>";
            echo "<label for='lieu_delivrance'>Lieu de délivrance :</label><br>";
            echo "<input type='text' id='lieu_delivrance' name='lieu_delivrance'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question9' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<select id='sexe' name='sexe'>";
            echo "<option value=''>Choisissez votre sexe</option>";
            echo "<option value='male'>Masculin</option>";
            echo "<option value='feminin'>Féminin</option>";
            echo "</select><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question10' style='display:none;'>";
            echo "<label for='groupe_sanguin'>Groupe sanguin :</label><br>";
            echo "<select id='groupe_sauguin' name='groupesanguin'>";
            echo "<option value=''>Choisissez votre groupe sanguin</option>";
            echo "<option value='a'>A</option>";
            echo "<option value='b'>B</option>";
            echo "<option value='ab'>AB</option>";
            echo "<option value='o'>O</option>";
            echo "</select><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
    }
    elseif($corps=='corps3' || $corps =='corps7'){
            echo "<h3>Informations pour ce choix :</h3>";
            echo "<form method='post' action='../q1.php' id='formQuestions'>";
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
            echo "<label for='nom_pere'>Nom du père :</label><br>";
            echo "<input type='text' id='nom_pere' name='nom_pere'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";

            echo "<div id='question6' style='display:none;'>";
            echo "<label for='nom_mere'>Nom de la mère :</label><br>";
            echo "<input type='text' id='nom_mere' name='nom_mere'><br>";
            echo "<input type='button' onclick='nextQuestion()' value='Suivant'>";
            echo "</div>";
            
            echo "<div id='question7' style='display:none;'>";
            echo "<label for='sexe'>Sexe :</label><br>";
            echo "<select id='sexe' name='sexe'>";
            echo "<option value=''>Choisissez votre sexe</option>";
            echo "<option value='male'>Masculin</option>";
            echo "<option value='feminin'>Féminin</option>";
            echo "</select><br>";
            echo "<input type='submit' name='submit' value='Valider'>";
            echo "</div>";
    }
    else {
    echo "<p>Aucune sélection de tête n'a été faite.</p>";
}
echo "</form>"; // Fermez le formulaire
}
?>
</div>

<script>
    var selectedBody = "<?php echo isset($_SESSION['corps_affichee']) ? $_SESSION['corps_affichee'] : ''; ?>";

    function nextQuestion() {
        var currentQuestion = document.getElementById('currentQuestion').value;
        document.getElementById('question' + currentQuestion).style.display = 'none';

        currentQuestion++;

        
        document.getElementById('question' + currentQuestion).style.display = 'block';
        document.getElementById('currentQuestion').value = currentQuestion;
    }
    document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("formQuestions");
    var textFields = form.querySelectorAll("input[type='text'], input[type='date'], select");
    
    textFields.forEach(function(field) {
        field.addEventListener("keydown", function(event) {
            if (event.keyCode === 13) { // Touche Enter
                event.preventDefault(); // Empêche la soumission du formulaire
                nextQuestion(); // Exécute l'action du bouton suivant
            }
        });
    });
});
</script>

<?php
include('../includes/footer.php');
?>