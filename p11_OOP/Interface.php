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

    // interface MyInterface
    // {
    //     public function method1();
    //     public function method2();
    // }
    // class MyClassName implements MyInterface
    // {
    //     public function method1()
    //     {
    //         echo "Method1 Called" . "\n";
    //     }
    //     // PHP Fatal error: Class MyClassName contains 1 abstract method
    //     // ... and must therefore be declared abstract or implement the remaining methods
    //     public function method2()
    //     {
    //         echo "Method2 Called" . "\n";
    //     }
    // }
    // $obj = new MyClassName;
    // $obj->method1();
    // $obj->method2();

    interface MyInterface
    {
        public function method1();
    }

    class MyClassName implements MyInterface
    {
        public function method1()
        {
            return "Method1 Called" . "\n";
        }
    }

    class MyClassName2 implements MyInterface
    {
        public function method1()
        {
            return "Method1 Called" . "\n";
        }
    }

    class Car implements MyInterface
    {
        public function method1()
        {
            return "Method1 Called" . "\n";
        }
    }

    // 0. Be interface'o - jei norime naudoti type hintus
    // ... tada deklaruojame, jog funkcija priima konkrečią klasę // ... ir jau kitų nepriims klasių.
    function calculateSomething(MyClassName $someObject)
    {
        return $someObject->method1() + 1 / 2;
    }
    // 1. Jei funkcija priima interface'ą, tai visos klasęs, kurios
    // ... implementuoja tą interface'ą gali būti paduodamos 
    // function calculateSomething2(MyInterface $someObject)
    // {
    //     return $someObject->method1() + 1 / 2;
    // }

    calculateSomething(new MyClassName());
    // calculateSomething(new MyClassName2());
    // calculateSomething2(new MyClassName());
    // calculateSomething2(new MyClassName2());
    // calculateSomething2(new Car());


    ?>
</body>

</html>