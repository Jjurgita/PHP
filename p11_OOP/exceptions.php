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

    // function checkNum($number) { if($number > 1) {
    //     throw new Exception("Value must be 1 or below"); // Exception yra objektas (OOP) }
    //     return true; 
    // }
    //     // checkNum(5); // kas bus be exception handling ← 
    // try {
    //     checkNum(5); // apguabiame pavojingą kodą try bloku 
    // } catch(Exception $e) {
    //     echo 'Message: ' . $e->getMessage(); 
    // }
    //     print("<br>Po exception!");

    class InvalidValueException extends Exception
    {
    }
    function checkNum($number)
    {
        if ($number > 1) {
            throw new InvalidValueException("Value must be 1 or below");
        } else if ($number < -1) {
            throw new Exception("Value must below 10");
        }
        return true;
    }
    try {
        // checkNum(-2); // checkNum(5);
    } catch (InvalidValueException $e) {
        echo 'Message 2: ' . $e->getMessage() . ' ' . get_class($e); // get_class ::
        https: //stackoverflow.com/questions/38316800/php-check-thrown-exception-type
    } catch (Exception $e) { // polimorfizmo pavyzdys. Catch blokai interpretuojami nuo viršaus į apačią
        echo 'Message 1: ' . $e->getMessage() . ' ' . get_class($e);
    }
    print("!!!");

    ?>
</body>

</html>