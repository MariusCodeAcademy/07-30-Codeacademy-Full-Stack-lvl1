<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // functions 
    //Sukurti funkciją, kuri ima 3 parametrus, ir
    // atspausdina juos <h3> HTML tag‘e

    function printH3($a, $b, $c, $d = 'nieko neivesta')
    {
        echo "<h3> $a $b $c $d </h3>";
    }
    // funkcijos kvietinys
    printH3('As', 'moku', 'PHP');
    printH3('Viskas', 'yra', 'Gerai', 'Dabar');
    echo "<hr>";

    // parasyti funkcija kuri paima 2 argumentus ir grazina juos padvigubintus 
    // ir sudetus
    echo doubleAndAdd(2, 3);

    function doubleAndAdd($num1, $num2)
    {
        // function body
        $db1 = $num1 * 2;
        $db2 = $num2 * 2;
        $sum = $db1 + $db2;
        return $sum;
    }

    // funkcijos kvietinys 
    // echo '<h2>' . doubleAndAdd(2, 3) . '</h2>';
    echo "<hr>";


    // global and local scope functions 
    $myNumber = 50;
    function testGlobal()
    {
        // ytraukti globalu kintamaji i funkcija
        global $myNumber;
        $myNumber = 60;
        echo 'local: ' . $myNumber;
    }

    testGlobal();
    echo 'global: ' . $myNumber;


    ?>
</body>

</html>