<?php

function separate($text)
{
    echo '<h3>' . $text . '</h3>';
    // atspausdinti visa masyva
    global $numbers;
    print_r($numbers);
    print '<hr>';
}

echo '<pre>';
// masyvai 
// index    0   1  2   3   4   5   6
$numbers = [0, 12, 8, -5, 10, 18, 22];
separate('orginalas');

// pakeistim 10 reiksme i 44
$numbers[4] = 44;
// atspausdinti visa masyva
separate('pakeistas 4 narys');

// js way
// numbers.push('naujas el')
// php way
array_push($numbers, 'new val');
// atspausdinti visa masyva
separate('array push new val');

// prideti elemenati i masyvo pradzia 
array_unshift($numbers, -15);
// atspausdinti visa masyva
separate('unshift. reiksme i masyvo pradzia');

// splice
// prideti nauja nari i vieta kur dabar yra sk 18

array_splice($numbers, 6, null, 99);

separate('splice magic to add 99');


// asociative array masyvas su key => value pairs

$person = [
    'name'      => 'Don',
    'lastname'  => 'Donson',
    'age'       => 50
];

print_r($person);
echo '<hr>';

// gauti varda
echo $person['name'];
echo '<hr>';


$person['age'] = 45;
print_r($person);
echo '<hr>';











echo '</pre>';
