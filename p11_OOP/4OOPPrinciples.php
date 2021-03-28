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
    /*  Enkasuliacija/Inkapsuliacija (encapsulation)  */
    // class Person2
    // {
    //     public $age = 1888;
    // }
    // class Person1
    // {
    //     private $age;
    //     public function __construct($age)
    //     {
    //         $this->age = $age;
    //     }
    //     public function setAge($age)
    //     {
    //         $this->age = $age;
    //     }
    //     public function getAge()
    //     {
    //         return $this->age;
    //     }
    //     function __toString()
    //     {
    //         return strval($this->age);
    //     }
    // }
    // $person = new Person1(-1);
    // print($person);

    // // su setteriu galime užtikrinti duomenų validumą
    // // ... ar netuščias stringas, ar metai 'logiški', ar stringas nėra kažkoks neleistinas
    // if (!($age < 0 or $age > 125)) {
    //     $this->age = $age;
    // } else {
    //     print("Age must be between 0 and 125");
    // }

    /* Paveldimumas (inheritance)  */
    // class Person
    // {
    //     private $firstname;
    //     private $lastname;

    //     public function __construct($fn, $ln)
    //     {
    //         $this->firstname = $fn;
    //         $this->lastname = $ln;
    //     }
    //     public function getFirstname()
    //     {
    //         return $this->firstname;
    //     }
    //     public function getLastname()
    //     {
    //         return $this->lastname;
    //     }
    // }
    // class Employee extends Person
    // {
    //     private $badgeId;

    //     public function __construct($fn, $ln, $bid)
    //     {
    //         parent::__construct($fn, $ln);
    //         $this->badgeId = $bid;
    //     }
    //     public function getBadgeId()
    //     {
    //         return $this->badgeId;
    //     }
    // }
    // // $p1 = new Employee("Jurgita", "Kat");
    // $p1 = new Employee("Jurgita", "Kat", 1111);
    // // print($p1->getFirstname());
    // echo $p1->getLastname();
    // echo $p1->getBadgeId();

    /*  Polimorfizmas  */

    // class Person
    // {
    //     private $firstname;
    //     private $lastname;
    //     public function __construct($fn, $ln)
    //     {
    //         $this->firstname = $fn;
    //         $this->lastname = $ln;
    //     }
    //     public function getFirstname()
    //     {
    //         return $this->firstname;
    //     }
    //     public function getLastname()
    //     {
    //         return $this->lastname;
    //     }
    // }
    // class Employee extends Person
    // {
    //     function someFun()
    //     {
    //         print("ABC");
    //     }
    // }
    // $people = array(
    //     new Employee("Jurgita", "Kat"), new Person("Jonas", "Jonaitis"),
    //     new Person("Petras", "Petraitis")
    // );
    // foreach ($people as $person) {
    //     print($person->getFirstname() . ' ' . $person->getLastname() . "\n");
    //     // Uncaught Error: Call to undefined method Person::someFun()
    //     // print($person->getFirstname() . ' ' . $person->getLastname() . ' ' . $person->someFun() . "\n");
    // }

    // class X
    // {
    //     function getFirstname()
    //     {
    //         echo ">>>";
    //     }
    // }
    // $x = new X();
    // print("-----------------" . PHP_EOL);

    // function poly(Person $p)
    // {
    //     print($p->getFirstname() . PHP_EOL);
    // }
    // poly($people[0]); // Employee
    // poly($people[1]); // Person
    // // poly($x); // X Uncaught TypeError: Argument 1 passed to poly() must be an instance of Person, instance of X given print("-----------------" . PHP_EOL);

    /*  Kompozicija */

    class Car
    {
        private $engine;
        // no dependency injection - Car class creates it's dependency i.e. engine 
        // ... this is not a recommended way to initialize objects / structure the app 
        // function __construct() {
        //     $this->engine = new Engine();
        // }

        // depency injection : constructor injection 
        function __construct(Engine $e)
        {
            $this->engine = $e;
        }


        // depency injection : setter injection 
        function setEngine(Engine $e)
        {
            $this->engine = $e;
        }

        function getEngine()
        {
            return $this->engine;
        }
    }
    class Engine
    {
        private $maker = "BMW";

        function __construct()
        {
            print("Engine is ON!");
        }
        function __toString()
        {
            return "This is an awesome engine by " . $this->maker;
        }
    }
    $engine = new Engine();
    $car = new Car($engine);
    $car2 = new Car(new Engine());
    print($car->getEngine());




    ?>
</body>

</html>