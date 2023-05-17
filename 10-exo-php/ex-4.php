<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex4)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>

    <div class="exo-4-container" class="ex-container">
        <h1>Trouver le nombre choisi par l'ordinateur:</h1>
        <form id="random-form" method="POST">
            <label for="random-input">Quel est le chiffre:</label>
            <input type="text" id="random-input" name="random-input">
            <button type="submit" name="submit-random-input">Valider</button>
            <button type="submit" name="reset-random-number">Réinitialiser</button>
            <button type="submit" name="reveal-random-number">Révéler</button>
        </form>

        <div class="result">
            <?php
            session_start();

            // Vérifie si le bouton "Réinitialiser" a été cliqué
            if (isset($_POST['reset-random-number'])) {
                unset($_SESSION['random_number']);
            }

            // Vérifie si le chiffre aléatoire a déjà été généré, sinon le génère
            if (!isset($_SESSION['random_number'])) {
                $_SESSION['random_number'] = rand(1, 10);
            }

            // Affiche le chiffre choisi par l'ordinateur si le bouton "Révéler" a été cliqué
            if (isset($_POST['reveal-random-number'])) {
                echo "Le chiffre choisi par l'ordinateur est : " . $_SESSION['random_number'];
            }

            // Vérifie si le formulaire a été soumis
            if (isset($_POST['submit-random-input'])) {
                // Récupère la valeur saisie par l'utilisateur
                $userGuess = $_POST['random-input'];

                // Vérifie si la saisie est un nombre
                if (is_numeric($userGuess)) {
                    $userGuess = (int)$userGuess;

                    // Compare la saisie avec le nombre aléatoire
                    if ($userGuess > $_SESSION['random_number']) {
                        $message = "Le nombre est plus petit";
                    } elseif ($userGuess < $_SESSION['random_number']) {
                        $message = "Le nombre est plus grand";
                    } else {
                        $message = "C'est gagné!";
                    }
                } else {
                    $message = "Veuillez entrer un nombre valide.";
                }

                // Affiche le résultat
                echo "<div class='result'>$message</div>";
            }
            ?>
        </div>
    </div>



</body>

</html>