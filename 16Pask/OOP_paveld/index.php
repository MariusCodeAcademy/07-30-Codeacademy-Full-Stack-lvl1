<?php
include './class/LivingThing.php';
include './class/Person.php';
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
        $person1 = new Person('Bordiuras', 'Serbentauskas', '1990-10-01');
        print_r($person1);

        echo $person1->getPersonInfo();
        ?>
    </pre>

</body>

</html>