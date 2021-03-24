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
    class Person
    {
        public $age = 1888;
    }
    class Person1
    {
        private $age;
        public function __construct($age)
        {
            $this->age = $age;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }
        public function getAge()
        {
            return $this->age;
        }
        function __toString()
        {
            return strval($this->age);
        }
    }
    $person = new Person1(-1);
    print($person);

    // su setteriu galime užtikrinti duomenų validumą
    // ... ar netuščias stringas, ar metai 'logiški', ar stringas nėra kažkoks neleistinas
    if (!($age < 0 or $age > 125)) {
        $this->age = $age;
    } else {
        print("Age must be between 0 and 125");
    }
    ?>
    <div></div>
    <?php
    /* Paveldimumas (inheritence)  */
    class Person2
    {
        private $firstname;
        private $lastname;

        public function __construct($fn, $ln)
        {
            $this->firstname = $fn;
            $this->lastname = $ln;
        }

        public function getFirstname()
        {
            return $this->firstname;
        }

        public function getLastname()
        {
            return $this->lastname;
        }
    }

    class Employee extends Person2
    {
        private $badgeId;

        public function __construct($fn, $ln, $bi)
        {
            parent::__construct($fn, $ln); // super();
            $this->firstname = $fn;
            $this->lastname = $ln;
            $this->badgeId = $bi;
        }
        public function getBadgeId()
        {
            return $this->badgeId;
        }
    }

    $p1 = new Employee("Mindaugas", "Bern", "0551651");
    // echo $p1->getFirstname() . PHP_EOL;
    // echo $p1->getBadgeId() . PHP_EOL;

    // $p1 = new Person2("Jurgita", "Kat.", "0551651");
    print($p1->getFirstname());
    // echo $p1->getBadgeId() . PHP_EOL; // Uncaught Error: Call to undefined method Person::getBadgeId()




    ?>
</body>

</html>