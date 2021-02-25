<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays w/ loops. Foreach</title>
</head>

<body>
    <h1>Arrays w/ loops. Foreach.</h1>
    <?php
    //-----------------------
    // VIENMATIS MASYVAS
    //-----------------------
    $indexed_arr = ["Mindaugas", "Jonas", "Antanas", "Mantas", "Antanas"];

    print(count($indexed_arr) . '<br>');
    // sizeof — Alias of count()
    // https://stackoverflow.com/a/51962583 - slower because it's an alias
    print(sizeof($indexed_arr) . '<br>');

    // ... VISŲ reikšmių PASIEKIMAS / IŠVARDINIMAS → for()
    for ($i = 0; $i < count($indexed_arr); $i++) {
        print($indexed_arr[$i] . '<br>');
    }

    // print("... PAIEŠKA (surasti pirmą atitinkantį savybę narį) → for() + if() (+ break)<br>");
    for ($i = 0; $i < count($indexed_arr); $i++) {
        if ($indexed_arr[$i] == "Antanas") {
            print("Name Antanas exists in the array!" . '<br>');
            break; // jeigu norėtume surasti VISUS Antanus, nereikia break
        }
    }
    print("<br><br>");

    // SWAP operation
    $arr = ['a', 'b'];

    // ... incorrect solution
    // print("<pre>");
    // print_r($arr);
    // $arr[0] = $arr[1]; // ['b', 'b']
    // $arr[1] = $arr[0]; // ['b', 'b']
    // print_r($arr);
    // print("</pre>");

    // ... correct solution - susikurti temporary kintamąjį, kuris laikinai pasaugos reikšmę
    print("<pre>");
    print_r($arr);

    $tmp = $arr[0];
    $arr[0] = $arr[1]; // ['b', 'b'] + $tmp (a)
    $arr[1] = $tmp; // ['b', 'a']

    print_r($arr);
    print("</pre>");



    // print("... RIKIAVIMAS → for() + if() (bubble sort)");
    // RIKIAVIMAS yra LYGINIMAS (dviejų narių) ir jų apkeitimas vietomis, jeigu reikia
    // žinoti: compare(), kuri grąžina neigiamą skaičių/ 0/ teigiamą skaičių ir swap(), kuri apkeičia narius
    print("<br><pre>");
    print("Before sorting:");
    print_r($indexed_arr);

    // // 0. Incorrect
    // for($i = 0; $i < count($indexed_arr)-1; $i++){
    //   if(strcmp($indexed_arr[$i], $indexed_arr[$i + 1]) > 0){
    //     // swap  operation
    //     $tmp = $indexed_arr[$i];
    //     $indexed_arr[$i] = $indexed_arr[$i + 1];
    //     $indexed_arr[$i + 1] = $tmp;
    //   }
    // }

    // Single pass when pairs are being compare is not enought!
    // 1. 
    $counter = 0;
    for ($i = 0; $i < count($indexed_arr); $i++) {
        for ($j = 0; $j < count($indexed_arr) - $i - 1; $j++) {
            // to compare strings use: strcmp($first_str, $second_str)
            if (strcmp($indexed_arr[$j], $indexed_arr[$j + 1]) > 0) {
                // swap  operation
                $tmp = $indexed_arr[$j];
                $indexed_arr[$j] = $indexed_arr[$j + 1];
                $indexed_arr[$j + 1] = $tmp;
            }
            $counter++;
        }
    }

    // - $i --> is an optimization! 
    print($counter . '<br>'); // 6 vs. 12
    // ... this optimization does not make bubble sort into O(n), still 
    // ... remains O(n^2) 

    print("After sorting:");
    print_r($indexed_arr);
    print("</pre><br>");

    // ... FILTRAVIMAS → for() + if()
    $filtered_array = [];
    for ($i = 0; $i < count($indexed_arr); $i++) {
        // is the first letter equal to "M"
        if (substr($indexed_arr[$i], 0, 1) === "M") {
            array_push($filtered_array, $indexed_arr[$i]);
        }
    }
    print("Original array:");
    print_r($indexed_arr);
    print("<br>");
    print("Filtered array:");
    print_r($filtered_array);
    print("<br><br>");


    // ... REIKŠMIŲ SUMA: → for()
    $arr_int = [1, 5, 55];
    $sum = 0; // akumuliatorius
    for ($i = 0; $i < count($arr_int); $i++) {
        $sum += $arr_int[$i];
    }
    print("Sum: " . $sum . "<br><br>");

    //-----------------------
    // ASOCIATYVUS MASYVAS
    //-----------------------
    $assoc_arr = ['A' => 1, 'B' => 2, 'C' => 3];

    // print('VISŲ reikšmių PASIEKIMAS / IŠVARDINIMAS → for()' . '<br>' . '<pre>');
    for ($i = 0; $i < count(array_keys($assoc_arr)); ++$i) {
        // get assoc array key, using an index --> $assoc_arr[key]
        // array_keys($assoc_arr) ==> ['A', 'B', 'C'] 
        // echo $assoc_arr['A'];
        // echo array_keys($assoc_arr)[$i]; // keys
        // echo $assoc_arr[array_keys($assoc_arr)[$i]]; // values
        echo array_keys($assoc_arr)[$i] . '->' . $assoc_arr[array_keys($assoc_arr)[$i]] . ' ';
    }
    print('</pre><br><br>');

    // Analysis of the last term: $assoc_arr[array_keys($assoc_arr)[$i]]
    print_r(array_keys($assoc_arr));
    print("<br>");
    print_r(array_keys($assoc_arr)[0]);
    print("<br>");
    print_r($assoc_arr['A']); // atspausdins: 1
    print("<br>");
    print_r($assoc_arr[array_keys($assoc_arr)[0]]); // atspausdins: 1
    print("<br>");

    // print('... For each loop' . '<br>' . '<pre>');
    foreach (["A", "B", "C"] as $val) {
        print($val . " ");
    }
    print("<br>");

    $aa = ['A' => 1, 'B' => 2, 'C' => 3];
    foreach ($aa as $k => $v) {
        print($k . '->' . $v . ' ');
    }
    print("</pre><br>");

    // ... PAIEŠKA (surasti pirmą atitinkantį savybę narį) → foreach() + if() (+ break)
    foreach ($assoc_arr as $k => $v) {
        if ($k == 'B' and $v == 2) {
            print('Found it!');
            break;
        }
    }
    print("<br><br>");

    // print('... RIKIAVIMAS → for() + if()' . '<br>' . '<pre>');
    $assoc_arr2 = ['A' => 55, 'C' => 6, 'B' => 4];
    print('Before sorting: ');
    print_r($assoc_arr2);
    print('<br>');

    $keys = array_keys($assoc_arr2);

    for ($i = 0; $i < count($keys); $i++) {
        for ($j = 0; $j < count($keys) - $i - 1; $j++) {
            // sorting by value
            if ($assoc_arr2[$keys[$j]] > $assoc_arr2[$keys[$j + 1]]) {
                $tmp = $assoc_arr2[$keys[$j]];
                $assoc_arr2[$keys[$j]] = $assoc_arr2[$keys[$j + 1]];
                $assoc_arr2[$keys[$j + 1]] = $tmp;
            }
            // TODO :: find where is the mistake !!!
        }
    }

    print('After sorting: ');
    print_r($assoc_arr2);
    print('</pre><br>');

    // Standard way of sorting assoc arrays:
    print('<pre>');
    print('Before sorting: ');
    print_r($assoc_arr2);

    asort($assoc_arr2); // by value!
    // ksort($assoc_arr2); // by key!
    // arsort($assoc_arr2); // by value reversed!
    // krsort($assoc_arr2); // by key reversed!

    print('After sorting: ');
    print_r($assoc_arr2);
    print('</pre><br>');


    // ... FILTRAVIMAS → for() + if()
    // ... REIKŠMIŲ SUMA: → for()

    //-----------------------
    // DAUGIAMATIS MASYVAS
    //-----------------------

    // ... jagged array
    $multid_arr = [
        ["Mindaugas", "Jonas", "Antanas", "Mantas"],
        ["Mindaugas", "Jonas", "Antanas"],
        ["Mindaugas", "Jonas"],
        ["Mindaugas"]
    ];

    // print('... VISŲ reikšmių PASIEKIMAS / IŠVARDINIMAS → for()');
    print('<br><pre>');
    for ($i = 0; $i < count($multid_arr); $i++) {
        for ($j = 0; $j < count($multid_arr[$i]); $j++) {
            print($multid_arr[$i][$j]);
            if (!($j + 1 == count($multid_arr[$i]))) {
                print(', ');
            }
        }
        print('<br>');
    }
    print('</pre><br>');

    // ... PAIEŠKA (surasti pirmą atitinkantį savybę narį) → for() + if() (+ break)

    // ... RIKIAVIMAS → for() + if() 
    // Daugiaprasmis dalykas rikiavimas multidimensinio masyvo, todėl turime apsibrėžti
    // - rikiuojame visus sub-masyvus, tačiau jų tarpusavio tvarkos nekeičiame
    // - rikiuojame ir sub-masyvus ir keičiame sub-masyvų tarpusavio tvarką
    // - iš n-dimensinio masyvo pagaminame 1-D masyvą, su išrikuotais elementais.

    // ... FILTRAVIMAS → for() + if()

    // ... REIKŠMIŲ SUMA: → for()

    // Binary search 
    ?>
</body>

</html>