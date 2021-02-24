<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Array / Array Functions</h1>
    <?php
    // --------------------------------------
    // 0. Single dimension indexed array

    $my_arr1 = array("A", "B", "C");  // initialization
    $my_arr2 = [0, 1, 2];             // initialization
    print($my_arr1[2] . "<br>");
    print_r($my_arr1); //print_r išpsausdina array vidurius
    print("<br>");
    var_dump($my_arr1); //var_dump išspausdina ir su kintamųjų tipais
    print("<br>");

    // initialize empty 
    $my_arr11 = array();
    $my_arr11 = [];
    print_r($my_arr11);
    print("<br><br>");

    // --------------------------------------
    // 1. Single dimension asociative array (key, value)
    // Keys turi būti unikalūs - reikšmės negali dublikuotis.
    // Keys gali būti tik sveikieji skaičiai bei eilutės (string), value gali būti ir masyvai ir skaliaria ir kompleksiniai objektai.

    $myAsocArr = array(
        "Vardas" => "Džekas",
        "Pavardė" => "Snow"
    );
    print($myAsocArr['Vardas'] . " " . $myAsocArr['Pavardė']);
    print("<br>");
    print($myAsocArr['Pavardė']);
    print($myAsocArr[0]); // taip rašyti negalime - nieko negausime !!!!!
    print("<br>");

    $my_arr3 = array(
        "Jonux" => "Jonas Petrauskas",
        "Petrux66" => "Petras Jonauskas",
        "Destroyeris3000" => "Juozas Statkevičius"
    );
    print($my_arr3["Destroyeris3000"] . "<br>");
    print_r($my_arr3);
    print("<br>");
    print_r(array_keys($my_arr3)); //array_keys() naudojama gauti visiems keys
    print("<br><br>");

    // --------------------------------------
    // 2. 2D indexed array
    $my_arr4 = array(
        array("A", "B", "C"),         // 0
        //     0   1   2
        array("1", "2", "3", "4"),    // 1
        array("dfvkfd", "dfvdfvfd")   // 2
    );
    print($my_arr4[0][2] . "<br>"); // atspausdins: C
    print_r(array("A", "B", "C"));
    print("<br>");

    $my_arr5 = [
        ["A", "B", "C"], //0
        ["1", "2", "3", "4"] //1
    ];
    print($my_arr5[1][3] . "<br>"); // atspausdins: 4
    print("<br>");

    // --------------------------------------
    // // 3. Multidimensional indexed array
    $my_arr6 = array(
        // 0
        array(
            array("A", "B", "C"), // 0
            array("D", "E", "F"), // 1
            // 0   1   2
        ),
        // 1
        array(
            array("1", "2", "3"), // 0
            array("4", "5", "6"), // 1
            // 0   1   2
        )
    );
    print("my_arr6: " . $my_arr6[1][0][1] . "<br>"); // atspausdins: 2
    print("<br>");

    // --------------------------------------
    // 4. Mixed (asociative and indexed) array
    $my_arr7 = array(
        "A" => [10, 9, 8, 10],
        "B" => ["Jonas", 8, 8, 5], // flexible type - gali būti betkokio tipo kintamieji
        "C" => [8, 8, 5] // jagged arrays - nėra būtina, kad visų array ilgis sutamptų
    );
    print_r($my_arr7["B"]);
    print('<br>');

    print("<br><br>ARRAY OPERATIONS: <br>");
    $my_arr8 = [0, 1, 2];

    // How many values inside the array? - skaičiuojame array ilgį
    print(count($my_arr8)); // atspausdins: 3
    print('<br>');

    // Papildome array naujomis reikšmėmis - PRAPLEČIAME
    print("Add new value to array: <br>");
    array_push($my_arr8, "A"); // pridedam papildomą "A" 
    print('<pre>');
    array_push($my_arr8, ["A", ["A", "B"]]); // pridedam papildomus du arrays (pirmasis su "A" reikšme; antrasis su "A" ir "B" reikšmėmis) 
    print_r($my_arr8);
    print('</pre>');
    print('<br>');

    print("Remove value w/ unset: <br>");
    unset($my_arr8[1]); // ištrina, tačiau lieka NULL
    var_dump($my_arr8[1]);
    print('<br>');
    print_r($my_arr8); // index 1 nespausdina - eina 0, 2, 3, 4
    print('<br><br>');
    print("What if we push after unset? <br>");
    array_push($my_arr8, "A");
    print_r($my_arr8); // atsiras nauja reikšmė, tačiau 5 indekse, 1 - vis dar NULL
    print('<br><br>');
    print("Remove value w/ array_splice: <br>");
    array_splice($my_arr8, 1, 1); // ištrinama prieš tai buvęs NULL ir įdedama nauja reikšmė
    print_r($my_arr8);
    print('<br>');
    var_dump($my_arr8[1]);
    print('<br><br>');
    print("What if we push after splice? <br>");
    array_push($my_arr8, "A", "B");
    print_r($my_arr8);
    print('<br><br>');
    // What will happen with negative values
    // ... -1 - removes the last value
    // ... -2 - removes the one before last value
    array_splice($my_arr8, -2, 1);
    print_r($my_arr8);
    print('<br>');
    var_dump($my_arr8[1]);
    print($my_arr8[1]);
    print('<br><br>');

    // All values with for loop
    print(count($my_arr8)); //array ilgis
    print('<br>');
    for ($i = 0; $i < count($my_arr8); $i++) {
        print($my_arr8[$i] . " ");
    }
    print('<br><br>');

    // Array filter
    print("Array filter: <br>");
    $my_arr9 = [0, 1, 2, 3, 4, 5];
    print_r($my_arr9);
    print('<br>');
    $filtered_array = array_filter($my_arr9, 'is_even');
    print_r($filtered_array);
    print('<br>');

    function is_even($var)
    {
        if ($var %  2 == 0)
            return true;
        else
            return false;
    }

    // Array filter with associative array
    // function is_even2($var, $var2)
    // {
    //     print('<br>');
    //     print_r($var);
    //     print_r($var2);
    //     print('<br>');
    //     if ($var[0] % 2 == 0)
    //         return true;
    //     else
    //         return false;
    // }

    // $my_arr10 = array(
    //     "Mindaugas Ber" => [10, 9, 8, 10],
    //     "Maksas Kex" => [9, 8, 8, 5],
    //     "Petras Ber" => [10, 9, 8, 10],
    // );

    // // array_filter($array, $callback, [$flag])
    // // 1. no flag passed - by default - values
    // // print_r($my_arr10);
    // $filtered_array = array_filter($my_arr10, 'is_even2');
    // print_r($filtered_array);

    // // 2. ARRAY_FILTER_USE_KEY 
    // $filtered_array = array_filter($my_arr10, 'is_even2', ARRAY_FILTER_USE_KEY);

    // // 3. ARRAY_FILTER_USE_BOTH
    // change the filtering function :: function is_even2($var, $var2)
    // $filtered_array = array_filter($my_arr10, 'is_even2', ARRAY_FILTER_USE_BOTH);


    // print_r($my_arr10); print("<br><br>");
    // $filtered_array = array_filter($my_arr10, function($item){ 
    //   if($item[0] == 10) return true; 
    // });
    // print_r($filtered_array);

    // $filtered_array = array_filter($my_arr10, function($value, $key){ 
    //   if($key == "Maksas Kex") return true; 
    // }, ARRAY_FILTER_USE_BOTH);
    // print_r($filtered_array);

    // $filtered_array = array_filter($my_arr10, function ($value, $key) {
    //     print($key);
    //     print_r($value);
    //     // add conditional here
    //     if ($key == "Maksas") return true;
    //     // // filter by value
    // }, ARRAY_FILTER_USE_BOTH);
    // print_r($filtered_array);
    ?>

</body>

</html>