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
    /*  STATINIAI METODAI   */
    class Util
    {
        public static function formatCurrency($amount)
        {
            return "$" . $amount;
        }
    }

    echo Util::formatCurrency(1000); // scope resolution operator
    ?>

    <div></div>

    <?php
    /*  STATINĖS SAVYBĖS    */
    class DbUtil
    {
        public static $dbUser = "root";
        public static $dbPass = "pass";
    }

    echo DbUtil::$dbUser . PHP_EOL; // PHP_EOL neveikia
    echo DbUtil::$dbPass . PHP_EOL;

    ?>

    <div></div>

    <?php
    /*  self - PSIAUDO KINTAMASIS   */
    class DbUtil1
    {
        public static $dbUser = "root";
        public static $dbPass = "pass";

        public static function getFullConnectionDetails()
        {
            return self::$dbUser . ' ' . self::$dbPass;
        }
    }

    echo DbUtil1::getFullConnectionDetails() . "<br>";

    ?>

    <div></div>

    <?php
    /*  STATINIŲ SAVYBIŲ KEITIMAS  */
    class CurrencyUtil
    {
        public static $symbol = "$"; // const DOLAR_SIGN = "$"; // playginimui

        public static function getFormattedCurrency($amount)
        {
            return self::$symbol . ' ' . $amount;
        }
    }

    echo CurrencyUtil::getFormattedCurrency(1000) . "<br>";

    CurrencyUtil::$symbol = "€"; // CurrencyUtil::DOLAR_SIGN = "€"; // playginimui
    echo CurrencyUtil::getFormattedCurrency(1000) . "<br>";
    ?>

    <div></div>

    <?php

    class CurrencyUtil1
    {
        public static $s1 = "$";
        public $s2 = "€";

        public static function f1()
        {
            print("<br>static - pirma funkcija");
            // print($this->$s2 . "f1()"); // static funkcijoje negalima naudoti $this - negalime pasiekti instance field
        }

        public function f2()
        {
            print(self::$s1 . ' ' . "f2()");
            self::f1();
        }
    }

    $o = new CurrencyUtil1();
    $o->f2();

    // PHP Notice:  Accessing static property CurrencyUtil::$s1 as non static ...
    // echo PHP_EOL . $o->s1 . PHP_EOL; //
    // echo PHP_EOL . $o::$s1 . PHP_EOL; // nenaudotina

    print("<br>");
    CurrencyUtil1::f2();
    print("<br>");
    CurrencyUtil1::f2();

    // PHP Fatal error:  Uncaught Error: Using $this when not in object context ...
    // $o->f1();

    ?>

    <div></div>

    <?php
    class Calculator
    {
        public static function add($i, $j)
        {
            return $i + $j;
        }
    }
    print Calculator::add(5, 5);

    class Person
    {
        public $name;
        function __construct($name)
        {
            $this->name = $name;
        }
    }
    $p1 = new Person("Kazys");
    $p2 = new Person("Rimantėlis");

    ?>
</body>

</html>