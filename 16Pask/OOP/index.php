<?php
include './class/Student.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <h1>OOP</h1>
    <pre>
        <?php
        // sukuriam nauja studenta pagal Sudent class
        $stud1 = new Student('Serbentas', 'Bordiuras', 'Medziu genejimo meistras');

        $stud1->middleName = 'Bob';
        // $stud1->name = 'Don';
        print_r($stud1);

        // sukursim 3 studentus su masyvu
        $students = [
            new Student('Jurgis', 'Mituzas', 'Teologija'),
            new Student('Dzekas', 'Alfatronas', 'Vadyba'),
            new Student('Pienas', 'Grietinius', 'Pramonine pienininkyste')
        ];

        echo $students[0]->getFullName();

        ?>
        </pre>

    <h4>Studentas: <?php echo $stud1->getFullName() ?></h4>

    <?php

    // atspausdinti visus masyvo budu sukurtus studentus
    foreach ($students as $student) {
        echo '<h4>' . $student->getFullName() . '</h4>';
    }

    ?>



</body>

</html>