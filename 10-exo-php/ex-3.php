<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex2)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>


    <div class="exo-3-container">
        <h1>Cercle - Périmètre et Aire</h1>
        <br>
        <form method="POST" id="rayon-form">
            <label for="rayon-input">Rayon:</label>
            <br>
            <input type="text" id="rayon-input" name="rayon-input">
            <br>
            <br>
            <label for="perimetre">Perimetre: </label>
            <br>
            <input type="checkbox" name="perimetre">
            <br>
            <br>
            <label for="perimetre">Aire: </label>
            <input type="checkbox" name="aire">
            <br>
            <button type="submit" name="submit-rayon-input">Valider</button>
        </form>
        <div class="rayon-result">
            <?php
            if (isset($_POST['submit-rayon-input'])) {
                $rayon = $_POST['rayon-input'];

                $afficherPerimetre = isset($_POST['perimetre']);

                $afficherAire = isset($_POST['aire']);

                $perimetre = 2 * 3.14159 * $rayon;
                $aire = 3.14159 * pow($rayon, 2);

                echo '<div class="rayon-result">';
                if ($afficherPerimetre && $afficherAire) {
                    echo 'Périmètre: ' . $perimetre . '<br>';
                    echo 'Aire: ' . $aire;
                } elseif ($afficherPerimetre) {
                    echo 'Périmètre: ' . $perimetre;
                } elseif ($afficherAire) {
                    echo 'Aire: ' . $aire;
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

</body>

</html>