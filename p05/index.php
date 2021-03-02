<?php

declare(strict_types=1); ?>
<!-- tipu deklaravimas example 7 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>
    <a href="homework.php">
        <button>Homework</button>
    </a>
    <?php
    // 0. Function declaration (w/ default parameters)
    function htmlLinePrinter($v1 = "Foo", $v2 = "Bar")
    {
        print($v1 . $v2 . '<br>');
    }

    // // jei parametrai kviečiami viduje, bet jie nedeklaruoti
    // function htmlLinePrinter(){
    //   print($v1 . $v2 . '<br>');
    // }

    // 0. Function call 
    print("<br><br>");
    htmlLinePrinter("ABC", "XYZ");
    htmlLinePrinter();
    htmlLinePrinter("ABC"); // positional binding
    htmlLinePrinter("Foo", "VVV"); // leaving first as default
    print("<br><br>");

    // // 1. Pure functions
    function add($first, $second)
    {
        return $first + $second;
    }

    $result = add(55, 55);
    print($result);
    print("<br><br>");

    // 2. Impure functions: see example 0

    // 3. Functions calling other functions: see example 0

    // 4. Recursion
    function factorial($number)
    {
        if ($number <= 1) {
            return 1; // base case
        } else {
            // 4 * factorial(3)
            return $number * factorial($number - 1); // recursive step
        }
    }

    // Driver Code 
    $number = 50;
    $fact = factorial($number);
    print('<br>' . $fact . '<br>');

    print('... 5. anonymous functions <br>');
    $a = array(1, 2, 3, 4, 5);
    $mapped_a = array_map(function ($x) {
        return $x * $x;
    }, $a);
    // we can also use call_user_func('function_name', [params])
    print_r($mapped_a);
    print("<br><br>");


    // $html = file_get_contents('https://www.myip.com/');
    // print($html);
    // print("<br><br>");


    // 6. Passing by reference and by value (copy)
    // ... let us compare two functions: by copy  ir by reference
    // function f($x) // by copy
    // {
    //     print('Value of $x inside the function: ' . $x . '<br>');
    //     return ++$x;
    // }

    function f(&$x) // & simbolis - by reference (naudingas didelėms duomenų struktūroms)
    {
        print('Value of $x inside the function: ' . $x . '<br>');
        return ++$x;
    }

    $var = 55;
    print(f($var)); // what the function returns
    print('<br>');
    print($var); // orginal - did it change? by copy būdu $var išlieka nepakitęs (55), by reference - pakis reikšmė į 56
    print("<br><br>");

    // 7. Type declarations
    function addNumbers1(int $a, int $b): float
    {
        return $a + $b;
    }

    // echo '<br>', addNumbers(5, "5 days"); //neveiks, nes turi b8ti int

    echo '<br>', addNumbers1(5, 5), '<br>';
    // what would happen if we were to remove type hints and call the previous function?
    // function addNumbers1($a, $b) {
    //   return $a + $b;
    // }
    print("<br><br>");

    // Funkcijos pakvietimas iš kito failo
    // include 'lib.php'; // will throw warning if the file is missing 
    require 'lib.php'; // will throw error if the file is missing
    print(multiply([6, 6, 2]));
    ?>
</body>

</html>