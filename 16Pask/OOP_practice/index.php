<?php
include './class/Data.php';
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
        <div class="input-group">
            <label for="name">Vardas</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="lastName">Pavarde</label>
            <input type="text" name="lastName" id="lastName">
        </div>
        <div class="input-group">
            <label for="subject">Dalykas</label>
            <input type="text" name="subject" id="subject">
        </div>
        <button type="submit" name='wasSentBtn'>Irasyti</button>
    </form>

    <?php
    // sukursim viena lenteles irasa
    $row1 = new Data('Bob', 'Bobson', 'Inzinierius');

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
            <?php echo $row1->gerenateRow() ?>
        </tbody>
    </table>



</body>

</html>