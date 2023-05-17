<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex7)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>

    <div class="exo-7-container">
        <h1>Etape 1: Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60</h1>
        <?php
        $TableValues = array();

        $TableValues[0] = '2';
        $TableValues[1] = '6';
        $TableValues[2] = '12';
        $TableValues[3] = '5';
        $TableValues[4] = '26';
        $TableValues[5] = '34';
        $TableValues[6] = '40';
        $TableValues[7] = '60';

        echo "<table>";
        foreach ($TableValues as $value) {
            echo "<tr><td>" . $value . "</td></tr>";
        }
        echo "</table>";
        ?>

        <h1>Etape 2: Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non</h1>
        <?php
        function checkParity($array)
        {
            $hasEven = false;
            $hasOdd = false;

            foreach ($array as $value) {
                if ($value % 2 == 0) {
                    $hasEven = true;
                } else {
                    $hasOdd = true;
                }
            }

            if ($hasEven && $hasOdd) {
                echo "Le tableau contient à la fois des valeurs paires et impaires.";
            } elseif ($hasEven) {
                echo "Le tableau contient uniquement des valeurs paires.";
            } elseif ($hasOdd) {
                echo "Le tableau contient uniquement des valeurs impaires.";
            } else {
                echo "Le tableau est vide ou ne contient aucune valeur.";
            }
        }
        ?>
        <h1>Etape 3: Afficher un message pour l'indiquer à l'utilisateur </h1>
        <?php
        echo '<p>';
        checkParity($TableValues);
        echo '</p>';
        ?>
        <br>

    </div>


</body>

</html>