<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS w/ LOOPS - Homework</title>
</head>

<body>
    <h1>Arrays w/ loops, foreach</h1>
    <?php
    /*
            1. Jei norime išvardinti visus narius atskiriant juos kableliais: (pvz: 1, 2, 3), 
                tačiau nenorime turėti nereikalingų kablelių pradžioje (pvz: , 1, 2, 3), 
                bei pabaigoje (pvz: 1, 2, 3, ). Kaip tai pasiekti? 
            
            Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu.
    */

    // Paprastas masyvas
    $arr1 = [
        'On',
        'Over',
        'In',
        'Under',
        'Behind',
        'Next to',
        'Between'
    ];
    print_r($arr1);
    print('<br>');

    for ($i = 0; $i < count($arr1); $i++) {
        print($arr1[$i]);
        if (!($i + 1 == count($arr1))) {
            print(', ');
        }
    }
    print('<br><br>');

    // Aspciatyvus masyvas
    $arr2 = [
        'A' => 1,
        'B' => 5,
        'C' => 10,
        'D' => 50,
        'E' => 100
    ];
    print_r($arr2);
    print('<br>');

    foreach ($arr2 as $k => $v) {
        print($v);
        if (!($v == end($arr2))) { // end() paima paskutinio array elemento reikšmę
            print(', ');
        }
    }
    print('<br><br><br>');

    /*
            2. Matėme kaip išvardinti kiekvieną masyvo narį. Kaip reiktų išvardinti kas antrą? 
            
            Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu.
    */

    // Paprastas masyvas
    print_r($arr1);
    print('<br>');
    print('Kas antra reikšmė: <br>');
    for ($i = 0; $i < count($arr1); $i++) {
        if ($i % 2 != 0) {
            print($arr1[$i]);
            if ($i != count($arr1) - 2) {
                print(', ');
            }
        }
    }
    print('<br><br>');

    // Asociatyvus masyvas
    print_r($arr2);
    print('<br>');
    print('Kas antra reikšmė: <br>');
    for ($i = 0; $i < count(array_keys($arr2)); ++$i) {
        if ($i % 2 != 0) {
            echo ($arr2[array_keys($arr2)[$i]]);
            if ($i != count(array_keys($arr2)) - 2) {
                print(', ');
            }
        }
    }
    print('<br><br><br>');

    ?>
</body>

</html>