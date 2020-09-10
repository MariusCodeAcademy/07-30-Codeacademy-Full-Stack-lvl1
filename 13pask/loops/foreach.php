<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>
<body>
    <a href="./index.php">For loop</a>
    <h1>ForEach</h1>

    <?php 
    //               0  1   2   3   4  5   6
    $numberArray = [ 5, 7, 12, -5, 15, 1, 32];

//     Išvesti visus masyvo elementus;
// » Išvesti visų masyvo elementų vidurkį;
// » Padidinti kiekviena masyvo elementą vienetu; 
// » Išvesti automobilis masyvą į ekraną; (dvilypis
// masyvas);
// » Sukurti Fibonacci seką(tai tokia seka, kuomet
// sekantis skaičius yra sudedamas su prieš tai 2 einančiu.)
 
 // for budu 
 // masyvo dydis
//  $arrayCount = count($numberArray);
 //Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
//  for ($i=0; $i<$arrayCount; $i++ ) {
//      echo $numberArray[$i] . '<br>';
//  }

echo "<h3> For each </h3>";
// foreach budas 
//masyvas per kuri sukam cikla
//                       kaip vadinsis kiekviena reiksme ciklo metu
foreach ($numberArray as $oneVal) {
    echo $oneVal . '<br>';
}

// » Išvesti visų masyvo elementų vidurkį; (padaryti funkcija);
// $total = 0;
// foreach ($numberArray as $val) {
//     $total += $val;
// }
function totalArr($arr) {
    $total = 0;
    foreach ($arr as $val) {
        $total += $val;
    }
    return $total;
}

$total = totalArr($numberArray);

echo "Total array value is: $total <br>";

echo "Total array value is: " . totalArr($numberArray);


//Išvesti visų masyvo elementų vidurkį; 

function arrAverage($arr) {
    $total = 0;
    foreach ($arr as $value) {
        $total += $value;
    }
    $arrayCount = count($arr);

    return $total / $arrayCount;

}

$manyAfterComma = arrAverage($numberArray);
// $manyAfterComma = arrAverage([2, 5, 7]);

// kvieciame funkcija 
echo '<br> vidurkis: ' . (round($manyAfterComma, 2));


$knyga = [
    // key       =>       value
    'pavadinimas' => 'Mazasis princas',
    'isleista' => 2015,
    'autorius' => 'Egziuperi'
];

// foreach per assoc masyva
echo '<ul>';
foreach ($knyga as $key => $val) {
    echo "<li> <strong>$key</strong>: $val </li>";
}
echo '</ul>';

$knygos = [
    [
        'pavadinimas' => 'Mazasis princas',
        'isleista' => 2015,
        'autorius' => 'Egziuperi'
    ],
    [
        'pavadinimas' => 'Karas ir taika',
        'isleista' => 1965,
        'autorius' => 'Tolstojus'
    ]
];

// atspausdinti visu knygu pavadinimus
foreach ($knygos as $knyga) {
    // knyga = asssoc masyvo elmentas 
    echo $knyga['pavadinimas'] . '<br>';
}
echo '<pre>';
// atspausdinti knygas isleistas iki 2000 metu 
foreach ($knygos as $knyga) {
    // patikrinti ar metai yra maziau nei 2000
    if ($knyga['isleista'] < 2000) {
        // true 
        print_r($knyga);
    }
}

//               0  1   2   3   4  5   6
$numberArray = [ 5, 7, 12, -5, 15, 1, 32];

// » Padidinti kiekviena masyvo elementą vienetu -> nauja masyva; 
$padidintasNumbers = [];
foreach ($numberArray as $index => $reiksme) {
    $numberArray[$index] = ++$reiksme;
    // padidinti reiksme 1 ir ikelti i nauja masyva
    // $padidintasNumbers[] = ++$reiksme;
    array_push($padidintasNumbers, ++$reiksme);
}

print_r($padidintasNumbers);
print_r($numberArray);

echo '</pre>';





    ?>
    
</body>
</html>