<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo 'This' ?></h1>
    <pre>
        <!-- ieiname i php rezima  -->
        <?php
        // sukursim 2 kintamuosius 
        $a = 8;
        $b = 10;

        // atspausdinti kad a * b = xx
        echo $a . ' * ' . $b . ' = ' . $a * $b;
        echo '<br>';
        // dvigubos kabutes gali atpazinti kintamuosius
        $daugyba = $a * $b;
        echo "$a * $b = {$daugyba} ";
        print "<h3> $a * $b = {$daugyba} </h3>";

        var_dump($daugyba);

        // phpinfo();

        $num1 = 5;
        $num2 = 35;
        $num3 = 10;
        echo 'suma: ';
        echo $num1 . ' + ' . $num2 . ' + ' . $num3 . ' = ' . ($num1 + $num2 + $num3);

        echo '<br>';

        echo 'liekana ';
        $liekana = $num2 % $num3;

        echo '<br>';
        echo "$num2 liekana $num3 yra lygi: $liekana";
        echo '<br>';
        // susikursim masyva
        $temperaturos = [0, 15, 25, 12, 5, -10, 'Mike', 5.2];

        // vardump 
        var_dump($temperaturos);
        echo '<br>';
        print_r($temperaturos);
        echo '<br>';
        echo $temperaturos[2];










        // baigiasi php
        ?>
    </pre>



</body>

</html>