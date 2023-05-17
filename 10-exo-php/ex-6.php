<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex6)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>

    <div class="exo-6-container">
        <h1>Selectionnez le personnage</h1>
        <p>pour voir l'image du personnage associée</p>
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
            if (isset($_POST['submit-character-input'])) {
                $selectedCharacter = $_POST['character'];

                $imagePath = '';
                if ($selectedCharacter === 'homme') {
                    $imagePath = '../assets/img/homme.png';
                } elseif ($selectedCharacter === 'femme') {
                    $imagePath = '../assets/img/femme.png';
                }

                echo '<img src="' . $imagePath . '" alt="Personnage">';
            }
            ?>
        </div>
    </div>

</body>

</html>