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
    <h1>Freelancer</h1>
    <pre>
    <?php
    // sukuriam darba

    $job1 = new Job(0, 'Footer Layout', 200);
    $job2 = new Job(1, 'Make Header', 150);
    // atsipausdinam nauja darba
    print_r($job1);
    echo '<hr>';

    // sukuriam nauja free lanceri
    $freelancer1 = new Freelancer('Eventas', 'Clickauskas');

    // atsipausdinam nauja freelancer
    print_r($freelancer1);
    echo '<hr>';

    // priskirkime sukurta darba 'Eventui'(freelanceriui)
    $freelancer1->assignJob($job1);
    $freelancer1->assignJob($job2);

    // atsipausdinam nauja freelancer
    echo 'Priskyreme darba<br>';
    print_r($freelancer1);
    echo '<hr>';

    // pabaikime pirmaji darba
    $freelancer1->finishJob(0);

    // atsipausdinam nauja freelancer
    echo 'pabaigem darba id 0<br>';
    print_r($freelancer1);
    echo '<hr>';

    // gauname freelancerio atlyginima
    echo 'Evento atlyginimas siai dienai<br>';
    echo $freelancer1->withdrawSalary();

    echo 'freelanceris po algos ismokejimo.<br>';
    print_r($freelancer1);
    echo '<hr>';








    ?>
    </pre>

</body>

</html>