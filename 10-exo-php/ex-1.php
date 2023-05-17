<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex1)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>

    <div id="exo-1-container" class="ex-container">
        <h1>Exercice 1:</h1>
        <h2>Affichage table de multiplication</h2>
        <form id="multiplication-form" method="POST">
            <label for="table-input">Table de:</label>
            <input type="text" id="table-input" name="table-input">
            <button type="submit" name="submit-table-input">Valider</button>
        </form>

        <div class="result">
            <?php
            if (isset($_POST['submit-table-input'])) {
                $tableInput = $_POST['table-input'];

                $table = array();
                for ($i = 1; $i <= 10; $i++) {
                    $result = $i * $tableInput;
                    $table[] = "$tableInput * $i = $result";
                }

                echo "<h3>Table de multiplication de $tableInput :</h3>";
                echo "<table>";
                foreach ($table as $row) {
                    echo "<tr><td>$row</td></tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </div>


</body>

</html>