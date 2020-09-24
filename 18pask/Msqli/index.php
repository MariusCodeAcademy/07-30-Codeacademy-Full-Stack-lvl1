<?php
require_once('./class/DB.php');
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

    <?php
    // echo 'online';

    /* 
    0. nusistatyti prisijungimo kintamuosius
    1. prisijungti prie DB
    2. pasitikrinti ar yra klaidu
    3. atlikti norimus veiksmus (nuskaityti duomenis)
    */

    // sukuriam nauja DB objekta ir jis prisijungia prie DB
    $conn = new DB();

    $conn->addCar('MB', "600", 6.0, 2010);










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