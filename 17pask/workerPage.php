<?php
// isitraukiam klases
require './class/Employee.php';
require './class/Freelancer.php';
require './class/Worker.php';
require './class/Job.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploees</title>
</head>

<body>
    <nav>
        <a href="./index.php">Freelancer</a>
        <a href="./workerPage.php">Worker</a>
        <a href="./array.php">Array</a>
    </nav>
    <h1>Workers</h1>


    <pre>
    <?php
    // sukuriam nauja darbuotoja
    $worker1 = new Worker('Sriftas', 'Raidenis', 10);
    // $worker2 = new Worker()

    echo 'Sukurem darbuotoja <br>';
    print_r($worker1);
    echo '<hr>';

    // darbuotojas isdirba 110 valandu 
    $worker1->work(110);
    $worker1->work(20);

    echo 'pradirbo 110 val <br>';
    print_r($worker1);
    echo '<hr>';

    // ismoketi Sriftui atlyginima uz 130 val 
    echo $worker1->getFullName() . ' atlyginimas: ';
    echo $worker1->withdrawSalary() . '<br>';

    echo 'Sriftas(darbuotojas) po apmokejimo <br>';
    print_r($worker1);
    echo '<hr>';


    ?>
    </pre>

</body>

</html>