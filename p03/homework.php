<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY - Homework</title>
</head>

<body>
    <h1>Array Functions</h1>
    <?php
    /*
        1. Pailiustruoti operacijas (array_sum, min, max) su:
                - vienmačiu masyvu;
                - asociatyviu masyvu (pagalvoti, kokios operacijos yra prasmingos);
                - *daugiamačiu masyvu;
    */

    // vienmatis masyvas
    $arr1 = [1.5, 50, 100.01, 150, -1, -50, -100, -1500];
    $suma1 = array_sum($arr1); //array_sum()
    print_r($arr1);
    print("<br>");
    print("SUMA = " . $suma1 . "<br>");

    $min1 = min($arr1); //min()
    print("MIN = " . $min1 . "<br>");
    $max1 = max($arr1); //max()
    print("MAX = " . $max1 . "<br><br>");

    // asociatyvus masyvas
    // prisklausomai nuo duomenų esančių jame galima rasti/nerasti sum, min ir max.. pvz kai reikšmės yra string nėra tikslo ieškoti sum, min ir max
    $arr2 = [
        "A" => 784,
        "B" => -9.8,
        "C" => 216,
        "D" => 1000
    ];
    print_r($arr2);
    print("<br>");
    $suma2 = array_sum($arr2);
    print("SUMA = " . $suma2 . "<br>");

    $min2 = min($arr2);
    print("MIN = " . $min2 . "<br>");
    $max2 = max($arr2);
    print("MAX = " . $max2 . "<br><br>");

    // daugiamatis masyvas
    $arr3 = [
        [1, 2, 3, 4],
        [-36.4, 11, 5],
        [1000, -875, 5.5, 1],
        [98, 87, -5, 51, 100000]
    ];
    print_r($arr3);
    print('<br><pre>');
    //atspausdinam visas reikšmes
    for ($i = 0; $i < count($arr3); $i++) {
        for ($j = 0; $j < count($arr3[$i]); $j++) {
            print($arr3[$i][$j]);
            if (!($j + 1 == count($arr3[$i]))) { // pridedamam "," kad nebūtų priekyje ir gale
                print(', ');
            }
        }
        print('<br>');
    }
    print('</pre>');

    $suma3 = 0;
    for ($i = 0; $i < count($arr3); $i++) {
        for ($j = 0; $j < count($arr3[$i]); $j++) {
            $suma3 += $arr3[$i][$j];
        }
    }
    print("SUMA = " . $suma3 . "<br>");

    // MIN ir MAX susikuriant naują array iš min/max reikšmių
    $minArr = [];
    for ($i = 0; $i < count($arr3); $i++) {
        for ($j = 0; $j < count($arr3[$i]); $j++) {
            if ($arr3[$i][$j] == min($arr3[$i])) {
                array_push($minArr, $arr3[$i][$j]);
            }
        }
    }
    print_r('MIN = ' . min($minArr));
    print('<br>');

    $maxArr = [];
    for ($i = 0; $i < count($arr3); $i++) {
        for ($j = 0; $j < count($arr3[$i]); $j++) {
            if ($arr3[$i][$j] == max($arr3[$i])) {
                array_push($maxArr, $arr3[$i][$j]);
            }
        }
    }
    print_r('MAX = ' . max($maxArr));
    print('<br><br>');

    /*
        2. Sukurti asociatyvųjį masyvą, kuris reprezentuotų žmogų ir jo svorį
            ("vardas1" => "svoris1"...) ir :
                - Rasti lengviausią žmogų;
                - Sunkiausią;
                - Susumuoti visų žmonių svorį ir paskaičiuoti, ar jie gali kilti liftu (500kg max);
                - *Atspausdinti žmones surikiuotus pagal svorį
    */

    $arr4 = array(
        "Saula" => 65,
        "Ona" => 88,
        "Petras" => 100,
        "Juozas" => 80,
        "Goda" => 50,
        "Kristina" => 70
    );

    //lengviausias žmogus:
    $lightest = array_search(min($arr4), $arr4);
    print("Lengviausias žmogus sarąse yra " . $lightest);
    print("<br>");
    //sunkiausias žmogus:
    $heaviest = array_search(max($arr4), $arr4);
    print("Lengviausias žmogus sarąse yra " . $heaviest);
    print("<br>");
    //bendras svoris:
    $overallWeight = array_sum($arr4);
    print("Visų žmonių svoris yra = " . $overallWeight . "kg - ");
    if ($overallWeight > 500) {
        print("Liftu kilti GRIEŽTAI DRAUDŽIAMA. Svoris yra per didelis!");
    } else {
        print("Liftu kilti GALIMA.");
    }
    print("<br><br>");
    //surikiuoti pagal svorį:
    //galima naudoti asort() ir forach
    asort($arr4);
    foreach ($arr4 as $key => $val) {
        print($key . " - " . $val . "kg <br>");
    }
    print("<br><br>");


    /*
        3. Pažiūrėti skirtumus tarp array_slice() ir array_splice()
                - Kodėl tiesiog negalime daryti print_r(array_splice($arr, 1, 2, ['a', 'b'])); ?
                - Kam galime jas abi panaudoti?
    */

    $arr = [0, 1, 2, 3];
    print_r($arr);
    print("<br><br>");
    print_r(array_slice($arr, 1, 2, true));
    print_r($arr);
    print("<br> array_slice() išskleidžia pasirinktas masyvo dalis <br> ");
    print("<br>");
    print_r(array_splice($arr, 1, 2, ['a', 'b']));
    print_r($arr);
    print("<br> array_splice() pašalina nurodytus elementus ir pakeičia juos nurodytais elementais");
    print("<br><br>");

    ?>
</body>

</html>