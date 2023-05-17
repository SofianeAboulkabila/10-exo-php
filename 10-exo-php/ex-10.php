<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex10)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>

    <div class="exo-10-container">

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

    // Création des objets "homme" et "femme"
    $homme = new Personnage(
        '../assets/img/homme.png',
        'Homme',
        30,
        'Homme',
        100,
        80
    );

    $femme = new Personnage(
        '../assets/img/femme.png',
        'Femme',
        25,
        'Femme',
        80,
        90
    );

    // Affichage des informations des objets "homme" et "femme"
    echo "<h1>Personnage Homme</h1>";
    $homme->afficherInformations();

    echo "<h1>Personnage Femme</h1>";
    $femme->afficherInformations();
    ?>
           </div>

        </div>
    </div>
</body>

</html>