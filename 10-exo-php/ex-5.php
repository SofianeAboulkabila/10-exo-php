<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-exo-php(ex5)</title>
</head>

<body>

    <!-- HEADER -->
    <?php include "./assets/compenants/header.php" ?>


    <div class="exo-5-container">
        <h1>Calculer une moyenne</h1>
        <br>
        <form method="POST" id="moyenne-form">
            <label for="moyenne-input">Nombre de notes totales:</label>
            <input type="number" id="moyenne-input" name="moyenne-input" required>
            <button type="submit" name="submit-moyenne-input">Valider</button>
        </form>
        <br>
        <?php
        if (isset($_POST['submit-moyenne-input'])) {
            $totalNotes = $_POST['moyenne-input'];

            // Vérifier si le nombre de notes est valide
            if (!is_numeric($totalNotes) || $totalNotes <= 0) {
                echo "Veuillez saisir un nombre valide de notes.";
                exit;
            }

            $notesForm = '';
            for ($i = 1; $i <= $totalNotes; $i++) {
                $notesForm .= '<label for="note' . $i . '">Note ' . $i . '/' . $totalNotes . ':</label>';
                $notesForm .= '<input type="number" id="note' . $i . '" name="note' . $i . '" required><br>';
            }

            echo '
                <form method="POST" id="notes-form">
                    <fieldset>
                        <legend>Moyenne:</legend>
                        ' . $notesForm . '
                    </fieldset>
                    <input type="hidden" name="moyenne-input" value="' . $totalNotes . '">
                    <br>
                    <button type="submit" name="submit-notes">Calculer</button>
                </form>
            ';
        }

        if (isset($_POST['submit-notes'])) {
            $totalNotes = $_POST['moyenne-input'];
            $notes = [];

            for ($i = 1; $i <= $totalNotes; $i++) {
                $noteName = 'note' . $i;
                if (isset($_POST[$noteName])) {
                    $note = $_POST[$noteName];
                    $notes[] = $note;
                }
            }

            $average = count($notes) > 0 ? array_sum($notes) / count($notes) : 0;

            echo "<div class='moyenne-result'>La moyenne est : " . $average . "</div>";
        }
        ?>

    
    </div>

</body>

</html>
