<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex8)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>


    <div class="exo-8-container">
        <h1>Sélection du personnage</h1>
        <p>Pour voir une fiche personnage en tableau relationnel </p>
        <br>
        <form method="POST" id="character-form">
            <label for="character-input">Personnage:</label>
            <select name="character" id="character-select">
                <option value="homme">homme</option>
                <option value="femme">femme</option>
            </select>
            <button type="submit" name="submit-character-input">Valider</button>
        </form>
        <div class="char-result">
            <?php
            class Personnage
            {
                private $characters = array(
                    'homme' => array(
                        'image' => '../assets/img/homme.png',
                        'nom' => 'Homme',
                        'age' => 30,
                        'sexe' => 'Homme',
                        'force' => 100,
                        'agilite' => 80
                    ),
                    'femme' => array(
                        'image' => '../assets/img/femme.png',
                        'nom' => 'Femme',
                        'age' => 25,
                        'sexe' => 'Femme',
                        'force' => 80,
                        'agilite' => 90
                    )
                );

                public function __construct()
                {
                    // Constructeur par défaut sans paramètres sinon erreur paramètres ligne 74 $personnage = new Personnage();
                }

                public function afficherInformations($selectedCharacter)
                {
                    $character = $this->characters[$selectedCharacter];

                    echo "<img src='" . $character['image'] . "' alt='Personnage'><br>";
                    echo "Nom : " . $character['nom'] . "<br>";
                    echo "Âge : " . $character['age'] . "<br>";
                    echo "Sexe : " . $character['sexe'] . "<br>";
                    echo "Force : " . $character['force'] . "<br>";
                    echo "Agilité : " . $character['agilite'] . "<br>";
                }
            }

            if (isset($_POST['submit-character-input'])) {
                $selectedCharacter = $_POST['character'];
                $personnage = new Personnage();
                $personnage->afficherInformations($selectedCharacter);
            }
            ?>
        </div>

    </div>

</body>

</html>