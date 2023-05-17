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

    <div class="exo-2-container">
        <br>
        <h1>Affichage d'une pyramide</h1>
        <br>
        <form method="POST" id="pyramide-form">
            <label for="pyramide-input">Hauteur de la pyramide:</label>
            <input type="text" id="pyramide-input" name="pyramide-input">
            <button type="submit" name="submit-pyramide-input">Valider</button>
        </form>
        <br>
        <br>
        <div class="pyramide-result">

            <?php
            function pypart($n)
            {
                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                for ($i = $n - 1; $i >= 0; $i--) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
            }

            if (isset($_POST['submit-pyramide-input'])) {
                $height = $_POST['pyramide-input'];
                pypart($height);
            }
            ?>

        </div>

    </div>

</body>

</html>