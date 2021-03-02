<?php

declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions - Homework</title>
</head>

<body>
    <h1>Array Functions</h1>
    <?php
    /*
        1. Parašyti funkciją, kuri priimtų array ir išrykiuotų jo elementus. 
            Funkciją deklaruojame kitame faile, bet iškviečiame šiame faile.

        2. Parašyti funkciją su tipais (type hinting) - funkcija kitam faile, iškviečiama - čia.

    */

    // 1. 
    require 'lib.php';

    $arr1 = ['Saulius', 3000, 'Pertras', 3500];
    sorting($arr1);
    print('<br><br>');

    // 2.
    $arr2 = [1.5, 50, 100.01, 150, -1, -50, 100, 1500];
    print(sum($arr2));
    print('<br><br>');

    $a = 1;
    $b = 999;
    sum2($a, $b);
    print('<br><br>');
    sum2(99, 1);


    ?>

</body>

</html>