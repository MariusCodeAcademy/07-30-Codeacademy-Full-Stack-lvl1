<?php
include './class/LivingThing.php';
include './class/Person.php';
include './class/Stundent.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paveldimumas</title>
</head>

<body>
    <h1>Paveldimumas</h1>

    <pre>
        <?php
        // $person1 = new Person('Bordiuras', 'Serbentauskas', '1990-10-01');
        // print_r($person1);

        // echo $person1->getPersonInfo();

        // Inkapsuliacija
        // $blob = new LivingThing('1900-11-17');
        // print_r($blob);
        // // $blob->brithDate;
        // // panaudojame getteri 
        // echo '<h3>Blobas gime: ' . $blob->getBdate() . '</h3>';
        // // panaudojame setteri
        // $blob->setBdate('2000-03-15');
        // echo '<h3>Blobas gime vel: ' . $blob->getBdate() . '</h3>';



        // sukurti nauja klase studentas su savybe field of study. 
        // public ir sukurti nauja studenta ir po sukurino 
        // priskirti reiksme i field of study
        // pasitikrinti su print_r kokias savybes turi sukurtas studento objektas

        $stud11 = new Student('Don', 'Donsonas', '1999-19-09');
        $stud11->fieldOfStudy = 'Marksizmas';

        print_r($stud11);

        $stud11->setBdate('2000-01-01');

        print_r($stud11);

        echo $stud11->getPersonInfo();




        ?>
    </pre>

</body>

</html>