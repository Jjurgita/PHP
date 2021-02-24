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

    // array_sum()
    // vienmatis masyvas
    $arr1 = [1.5, 50, 100.01, 150, -1, -50, -100, -1500];
    $suma1 = array_sum($arr1);
    print_r($arr1);
    print("<br>");
    print("Suma = " . $suma1 . "<br><br>");

    // asociatyvus masyvas
    // prisklausomai nuo duomenų esančių jame galima rasti/nerasti sum, min ir max.. pvz kai reikšmės yra string nėra tikslo ieškoti sum, min ir max
    $arr2 = [
        "Administracija" => "Ona Onaitė",
        "Buhalterija" => "Pertras Petraitis",
        "Kabinetas" => 216
    ];
    print_r($arr2); // ????
    print("<br><br>");

    // daugiamatis masyvas
    $arr3 = [
        [
            [1, 2, 3, 4],
            [-36.4, 11, 5]
        ],
        [
            [1000, -875, 5.5, 1],
            [98, 87, -5, 51, 100000]
        ]
    ];
    print_r($arr3);
    print("<br>");
    $suma2 = array_sum($arr3[0][0]) + array_sum($arr3[0][1]) + array_sum($arr3[1][0]) + array_sum($arr3[1][1]);
    print("Suma = " . $suma2 . "<br><br>");

    // min / max
    // vienmačio masyvo
    $min1 = min($arr1);
    print("MIN = " . $min1 . "<br>");
    $max1 = max($arr1);
    print("MAX = " . $max1 . "<br><br>");

    // daugiamačio masyvo
    $min3 = min($arr3[0][0]);
    print("MIN = " . $min3 . "<br>");
    $max3 = max($arr3);
    print("MAX = " . $max3 . "<br><br>");

    // PABANDYTI SUKURTI NAUJĄ PASYVĄ IŠ MAŽIAUSIŲ VALUES IR TADA IŠ NAUJO IŠRINKTI MIN - TAIP PAT SU MAX VALUE ?????


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
    $lightest = array_search(min($arr4), $arr4); //ar geriau naudoti array_keys?
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
    //galima naudoti asort() 
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
    print_r(array_slice($arr, 1, 2, true)); // išskleidžia pasirinktas masyvo dalis
    print_r($arr);
    print("<br><br>");
    print_r(array_splice($arr, 1, 2, ['a', 'b'])); // pašalina nurodytus elementus ir pakeičia nurodytais elementais
    print_r($arr);
    print("<br><br>");

    ?>
</body>

</html>