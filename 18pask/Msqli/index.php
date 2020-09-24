<?php
require_once('./class/DB.php');
$conn = new DB();
// pasitikrinti ar forma issiusta
if (isset($_POST['autoBtn'])) {
    // buvo paspausta issiusti forma
    // issisaugome formos irasus
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $year = $_POST['year'];
    // irasome i db
    $conn->addCar($brand, $model, $engine, $year);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Msqli</title>
</head>

<body>
    <h1>Databases</h1>

    <h3>Ikelkite nauja automobili</h3>

    <!-- new myForm(); -->
    <form action="index.php" method="post">
        <input type="text" placeholder="Brand" name='brand' required>
        <input type="text" placeholder="Model" name='model' required><br>
        <input type="number" step="0.1" placeholder="Engine" name='engine' required>
        <input type="text" placeholder="Year of make" name='year' required><br>
        <button type="submit" name="autoBtn">Ikelti auto</button>
    </form>

    <?php
    // echo 'online';

    /* 
    0. nusistatyti prisijungimo kintamuosius
    1. prisijungti prie DB
    2. pasitikrinti ar yra klaidu
    3. atlikti norimus veiksmus (nuskaityti duomenis)
    */

    // sukuriam nauja DB objekta ir jis prisijungia prie DB
    // $conn = new DB();

    // ikelti nauja automobili
    // $conn->addCar('MB', "600", 6.0, 2010);

    // gauti visus irasus is lenteles
    echo '<pre>';
    $tableRowsArray = $conn->getTableRows();
    // print_r($tableRowsArray);
    echo '</pre>';

    // atspausdinti duomenis is gauto masyvo
    echo "<ul>";
    foreach ($tableRowsArray as $row) {
        // echo "<li> {$row['brand']} - {$row['model']} - {$row['engineVolume']} - {$row['year']} </li>";
        // print_r($row);
        echo '<li>';
        foreach ($row as $key => $value) {
            echo " - $value, ";
        }
        echo '</li>';
    }
    echo "</ul>";










    // sukurti nauja cars lentele 
    // $sql = "CREATE TABLE cars(
    //     id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     brand VARCHARq(20) NOT NULL,
    //     model VARCHAR(20) NOT NULL,
    //     engineVolume FLOAT(4,2), 
    //     year INT(2) UNSIGNED 
    // )";

    // // nusiusti sql uzklausa i mysql ir gauti gryztamaji rysi
    // if ($conn->query($sql) === TRUE) {
    //     echo 'Lentele cars sukurta sekmingai';
    // } else {
    //     echo 'Klaida, nepavyko sukurti lenteles: ' . $conn->error;
    // }






    // uzdaryti mysqli prisijungima
    $conn->closeConnection();




    ?>

</body>

</html>