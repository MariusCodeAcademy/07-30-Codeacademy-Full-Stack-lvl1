<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <a href="./foreach.php">ForEach loop</a>
    <h1>Loops</h1>
    <pre>
    <?php 
    /* 
    For ciklas===================================
    » Išvesti į ekraną 10 kartų žodį 'Labas';
    » Išvesti į ekraną skaičius nuo 1 iki 10;
    » Išvesti į ekraną skaičius nuo 10 iki 1;
    » Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100; */
    
    // echo 'Labas<br>';
    // echo 'Labas<br>';
    // echo 'Labas<br>';
    // echo '<br><br>';

    for ($i=0; $i<10; $i++) {
        // ciklo body
        echo $i+1 .' => Labas <br>';
    }
    // 1 - 10
    for ($i=1; $i<=10; $i++){
        echo $i . '<br>';
    }

    echo '<hr>';

    echo '<h3>  10 -> 1 </h3>';

    // 10 - 1 
    for ($i=10; $i>0; $i--) {
        echo $i . '<br>';
    }

    // » Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;

    for ($i=0; $i<100; $i++) {
        // patikrinti ar skaiciu yra lyginis
        if ( $i % 2 === 0 ) echo "($i)";
    }

    echo '<hr>';

    for ($i=0; $i<100; $i+=2) {
        echo "($i)";
    }


    /* 
    Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
    » Išvesti į ekraną visų masyvo elementų sumą.;
    » Išvesti į ekraną visų masyvo elementų sandaugą.;
    » Išvesti į ekraną kas antrą masyvo elementą;
    » Funkciją, kuri apsuktų masyvo elementus (iš kito galo);
 
    */
    echo "<br>";
    $numberArray = [ 5, 7, 12, -5, 15, 1, 32];
    // masyvo dydis
    $arrayCount = count($numberArray);


    
    //Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
    for ($i=0; $i<$arrayCount; $i++ ) {
        echo $numberArray[$i] . '<br>';
    }




    //Išvesti į ekraną visų masyvo elementų sumą.;
    $bendraSuma = 0;
    $bendraDaugyba = 1;
    for ($i=0; $i<$arrayCount; $i++ ) {
        $bendraSuma += $numberArray[$i];
        $bendraDaugyba *= $numberArray[$i];
    }

    echo "<br> Bendra suma gavosi: $bendraSuma o daugyba: $bendraDaugyba <br>";


    echo 'kas antras elementas <br>';
    //» Išvesti į ekraną kas antrą masyvo elementą;
    for ($i=0; $i<$arrayCount; $i+=2) {
        echo "<({$numberArray[$i]})>";
        
    }

    // » Funkciją, kuri apsuktų masyvo elementus (iš kito galo);
    //               0  1   2   3   4  5   6
    $numberArray = [ 5, 7, 12, -5, 15, 1, 32];
    echo '<br> is galo i prieki <br>';
    for ($i=$arrayCount-1; $i>=0; $i--) {
        echo $numberArray[$i] . '<br>';
    }
















    ?>
    </pre>
    
</body>
</html>