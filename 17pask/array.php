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
    <h1>Apibendrinimas</h1>
    <pre>
    <?php
    // sukuriam darbu masyva freelanceriam

    $jobs = [
        new Job(1, 'Footer layout', 200), //0
        new Job(2, 'Header functions', 150),  //1
        new Job(3, 'PHP Crud', 600)  //2
    ];

    // susikuriam keleta darbuotoju ir freelanceriu
    $employees = [
        new Worker('Sriftas', "Raidenis", 10), // 0 
        new Worker('Stilija', 'Ce Esauskaite', 8), // 1
        new Freelancer('Eventas', 'Klikauskas'), //2
        new Freelancer('Apas', 'Rekvestenis') // 3
    ];

    // paskirstom darbui freelanceriam
    // darbai Eventui
    $employees[2]->assignJob($jobs[0]);
    $employees[2]->assignJob($jobs[2]);
    // darbai Apui
    $employees[3]->assignJob($jobs[1]);

    // atsispausdinam darbuotoju masyva
    // print_r($employees);

    // darbuotojai dirba valandas 
    $employees[0]->work(160);
    $employees[1]->work(80);

    // freelaceriai baigia darbus
    $employees[2]->finishJob(1);
    $employees[2]->finishJob(3);

    $employees[3]->finishJob(2);

    // atsispausdinam darbuotoju masyva
    // print_r($employees);

    // bedras algalapis
    echo '<h2>Algalapis</h2>';
    echo '<ul>';
    foreach ($employees as $employee) {
        $fullName = $employee->getFullName();
        $salary = $employee->withdrawSalary();
        echo "<li> $fullName: $salary </li>";
    }
    echo '</ul>';












    ?>
    </pre>

</body>

</html>