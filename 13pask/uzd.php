<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzduotis</title>
</head>
<body>
    <pre>
<?php  
//   Sukurti masyvus, kuriuose būtų aukščių matavimo duomenys ir 
//   juos sujungti.
// » Ištrinti iš masyvo elementą 3 skirtingais būdais
// » Sukurti masyvą, kuris aprašytų knygos duomenis.
// » Sukurti masyvą, kurio elementai būtų masyvai
// aprašantys knygas

echo 'uzd.php <br>';

// susikurti assoc masy apie knyga

$knyga = [
    'pavadinimas' => 'Mazasis princas',
    'isleista' => 2015,
    'autorius' => 'Egziuperi'
];

echo $knyga['autorius'];

// knygu masyvas turintis viduje assoc masyvus

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
    ],
    // 'random string'

];

print_r($knygos);
var_dump($knygos);

// atspausdinti antro autoriaus pavarde
echo $knygos[1]['autorius'];
print($knygos[0]['autorius']);

$skaicius = 5;

echo "musu skaicius yra lygus {$knygos[1]['autorius']}";



?>
</pre>
</body>
</html>


