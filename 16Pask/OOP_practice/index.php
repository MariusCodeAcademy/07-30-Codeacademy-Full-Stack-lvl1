<?php
include './class/MyData.php';

session_start();

// susikuriam sesijos masyva eiluciu duomenims
// jei jau yra sukurtas neperrasom
if (!isset($_SESSION['rows'])) {
    $_SESSION['rows'] = [];
}


if (isset($_POST['resetSession'])) {
    $_SESSION['rows'] = [];
}
// isvalyti rows 
// $_SESSION['rows'] = [];

// formos apdorojimas
if (isset($_POST['wasSentBtn'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $subject = $_POST['subject'];


    $newRow = new MyData($name, $lastName, $subject);
    // print_r($rowsArray);
    $_SESSION['rows'][] = $newRow;
    print_r($_SESSION['rows']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP practice</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid darkblue;
        }
    </style>
</head>

<body>
    <h1>OOP practice</h1>
    <!-- Sukurti forma kuria uzpildzius elmentai yra ikeliami i lentele -->


    <form action="index.php" method="post">
        <button type="submit" name="resetSession">Reset session</button>
    </form>

    <form action="index.php" method="post">
        <div class="input-group">
            <label for="name">Vardas</label>
            <input required type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="lastName">Pavarde</label>
            <input required type="text" name="lastName" id="lastName">
        </div>
        <div class="input-group">
            <label for="subject">Dalykas</label>
            <input required type="text" name="subject" id="subject">
        </div>

        <button type="submit" name='wasSentBtn'>Irasyti</button>
    </form>

    <?php
    // sukursim viena lenteles irasa
    $row1 = new MyData('Bob', 'Bobson', 'Inzinierius');

    ?>


    <table>
        <thead>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Studijuojamas dalykas</th>
        </thead>
        <tbody>
            <tr>
                <td>Don</td>
                <td>Donsonas</td>
                <td>Agrochemija</td>
            </tr>
            <?php
            echo $row1->generateRow();
            if (isset($_SESSION['rows']) && count($_SESSION['rows']) > 0) {
                foreach ($_SESSION['rows'] as $oneRow) {
                    echo $oneRow->generateRow();
                }
            }

            ?>
        </tbody>
    </table>



</body>

</html>