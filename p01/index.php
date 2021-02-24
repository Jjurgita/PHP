<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print('Hello,');
    print(' Jurgita');
    print('!<br>');

    $x = 5;
    $y = 2;
    $res = $x % $y;
    print("Dalinant {$x} iš {$y}, liekana yra {$res}<br>");
    print("Dalinant {$x} iš {$y}, liekana yra " . ($x % $y) . "!<br>");

    $love = true; //true = 1
    $car = false; //false = "niekam"
    print("Love? - {$love}<br>");
    print("Car? - {$car}");
    print('!<br>');

    print 5; //integer literal
    $int_var = 5; //integer literal (named variable)
    print($int_var);
    print('<br>');

    //Skaičiai
    $my_int1 = 5;
    $my_int2 = 5;
    print($my_int1 + $my_int2);
    print('<br>');

    //Eilučių interpoluacija
    $my_str1 = "Jurgita";
    $my_str2 = "My name is ${my_str1} !<br>"; //sukuriamas naujas kintamasis su kito kintamojo reiksme
    print($my_str2);

    //Eilutės
    $my_str1 = "5";
    $my_str2 = "5";
    print($my_str1 + $my_str2); //sudeda abu kintamuosius
    print('<br>');
    print($my_str1 . $my_str2); // sujungimas (concatenation)
    print('<br>');
    ?>

    <!-- GENERUOJAME HTML: -->
    <?php echo "<h1>Hello, World!</h1>"; ?>
    <?php echo '<h1 style="color: red">Hello, World!</h1>'; ?>
    <?php echo "<h1 style=\"color: red\">Hello, World!</h1>"; ?>

    <?php
    // while loop
    $i = 0;
    while ($i < 10) { // true || false
        print($i . " ");
        $i++; // $i = $i + 1; $i += 1;
    }
    print('<br>');

    // 1. for loop
    for ($i = 0; $i < 5; $i++) {
        print($i);
    }
    print('<br>');


    // 2. for + continue
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        print($i + 1 . "<br>");
    }
    print("<br>");


    $d = "Fri";
    if ($d == "Fri") {
        echo "Have a nice weekend!" . "<br>";
    } elseif ($d == "Sun") {
        echo "Have a nice Sunday!" . "<br>";
    } else {
        echo "Have a nice day!" . "<br>";
    }
    print("<br>");


    var_dump(date("Y-m-d H:i:s")); //var_dump spausdina kintamojo tipa
    print("<br>");
    var_dump(date("D"));
    print("<br>");

    $d = date("D");
    print($d . "<br>");
    switch ($d) {
        case "Mon":
            echo "Today is Monday";
            break;
        case "Tue":
            echo "Today is Tuesday";
            break;
        case "Wed":
            echo "Today is Wednesday";
            break;
        case "Thu":
            echo "Today is Thursday";
            break;
        default:
            echo "Wonder which day is this ?";
    }
    print("<br>");

    switch ("Tue") {
        case "Mon":
        case "Sun":
            echo "Have a nice day!";
            break;
        case "Tue":
            echo "Today is Tuesday";
            break;
        case "Wed":
            echo "Today is Wednesday";
            break;
        default:
            echo "Wonder which day is this ?";
    }
    ?>
</body>

</html>