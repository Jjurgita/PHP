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
    final class Person
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
    $people = array(
        new Person("Petras", "Petraitis"), new Person("Jonas", "Jonaitis"), new Person("A", "B")
    );

    // print_r($people);

    // sorting
    // usort($people, function ($a, $b) {
    //     return strcmp($a->getFirstname(), $b->getFirstname());
    // });
    // print_r($people);

    // filtering
    // $filtered = array_filter($people, function ($p) {
    //     if (strlen($p->getFirstname()) > 5) return true;
    // });
    // print_r($filtered);

    // searching
    // $k = array_search(new Person("A", "B"), $people);
    // print($k . PHP_EOL);
    // print_r($people);

    ?>
</body>

</html>