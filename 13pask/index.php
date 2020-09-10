<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Continue</title>
</head>

<body>
    <h1>Arrays Continue</h1>
    <pre>
        <?php
        echo 'ar veikia php?';

        // array diff komanda/metodas/funkcija

        $temp = [1, 5, 15, 30, 8];
        print_r($temp);
        $rez = array_diff($temp, [ 30 ]);

        print_r($rez);
        echo '<hr>';
        // array diff su assoc masyvu 

        $car1 = [
            'marke' => 'mercedes',
            'modelis' => 'e60',
            'spalva' => 'juoda'
        ];
        print_r($car1);
        $rezA = array_diff_key($car1, [
            'marke' => 'BMW',
            'spalva' => 'juoda'
        ]);

        print_r($rezA);

        print_r($car1);

        // MAsyvy metodai shift ir pop
        echo '<hr>';
        $temp = [1, 5, 15, 7, 8];
        print_r($temp);

        //array_pop() istrinti paskutini masyvo elementa

        $rez = array_pop($temp);
        echo 'ivyko pop <br>';
        print_r($temp);
        echo 'pop rezltatas: ' . $rez;

        // array_shift() nuima pirmaji nari ir perindexuoja masyva
        echo '<hr>';
        $rez = array_shift($temp);
        echo 'atliktas shift';
        print_r($temp);
        echo 'shift rezultatas: ' . $rez;
        echo '<hr>';

        // masyvu sujungimas array_merge()
        //        0  1   2   3   4  5
        $temp1 = [0, 3, 10, -5, 18];
        $temp2 = [20, 17, 15, 25];
        $mergedArray = array_merge($temp1, $temp2, $temp);
        print_r($temp1);
        print_r($temp2);
        print_r($mergedArray);

        array_splice($temp1, count($temp1), 0, $temp2);
        echo 'arraySplice kad sujungti masyvus <br>';
        print_r($temp1);



 









        ?>
    </pre>

</body>

</html>