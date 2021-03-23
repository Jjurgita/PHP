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
    class Person1
    {
        public $firstname = "Jurgita";
        public $lastname = "Kat.";

        public function getLastname()
        {
            return $this->lastname;
        }
        public function setLastname($lastname)
        {
            $this->lastname = $lastname;
        }
    }
    $person1 = new Person1();
    print($person1->firstname . "<br>"); // arrow operatorius
    print($person1->lastname . "<br>");
    var_dump($person1);

    class Person2
    {
        const AVG_LIFE_SPAN = 79; //konstanta
        public $firstname = "Petras";
        public $lastname = "Pet.";
    }
    $person2 = new Person2();
    echo Person2::AVG_LIFE_SPAN; //scope resolution - iskviesti konstantas

    ?>
</body>

</html>