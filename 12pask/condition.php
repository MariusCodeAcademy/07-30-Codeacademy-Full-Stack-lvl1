<?php

// paprastas palyginimas su if

$num = 6;

if ($num === 5) {
    // jei true
    echo "$num yra lygus 5";
} else {
    // jei false 
    echo "$num yra nelygus 5";
}

// else if 
// savaites dienos
echo '<hr>';
$day = 5;

if ($day === 1) {
    echo 'pirmadienis';
} elseif ($day == 2) {
    echo 'antradienis';
} elseif ($day === 3) {
    echo 'treciadienis';
}

echo '<hr>';
// Switch case 

switch ($day) {
    case 1:
        echo 'pirmadienis';
        break;
    case 2:
        echo 'Antradienis';
        break;
    case 3:
        echo 'Treciadienis';
        break;
    case 4:
        echo 'Ketvirtadienis';
        break;
    default:
        echo 'Savaitgalis';
        break;
}

echo '<hr>';

// vygdyti koda jei kintamasis yra integer tipo

$xx = "5";

if (is_int($xx)) echo "$xx is type integer";
