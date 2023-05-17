<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex9)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>



    <div class="exo-9-container">
        <h1>Selection du personnage</h1>
        <p>pour voir une fiche personnage en POO</p>
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
                private $image;
                private $nom;
                private $age;
                private $sexe;
                private $force;
                private $agilite;

                public function __construct($image, $nom, $age, $sexe, $force, $agilite)
                {
                    $this->image = $image;
                    $this->nom = $nom;
                    $this->age = $age;
                    $this->sexe = $sexe;
                    $this->force = $force;
                    $this->agilite = $agilite;
                }

                public function afficherInformations()
                {
                    echo "<img src='" . $this->image . "' alt='Personnage'><br>";
                    echo "Nom : " . $this->nom . "<br>";
                    echo "Âge : " . $this->age . "<br>";
                    echo "Sexe : " . $this->sexe . "<br>";
                    echo "Force : " . $this->force . "<br>";
                    echo "Agilité : " . $this->agilite . "<br>";
                }
            }

            if (isset($_POST['submit-character-input'])) {
                $selectedCharacter = $_POST['character'];

                // Créer l'objet en fonction de la sélection
                if ($selectedCharacter === 'homme') {
                    $personnage = new Personnage(
                        '../assets/img/homme.png',
                        'Homme',
                        30,
                        'Homme',
                        100,
                        80
                    );
                } elseif ($selectedCharacter === 'femme') {
                    $personnage = new Personnage(
                        '../assets/img/femme.png',
                        'Femme',
                        25,
                        'Femme',
                        80,
                        90
                    );
                }

                // Afficher les informations du personnage
                $personnage->afficherInformations();
            }
            ?>

        </div>
    </div>
</body>

</html>