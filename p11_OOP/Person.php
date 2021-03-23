<?php

class Person
{
    function __construct($firstname = "Vardas", $lastname = "Pav.")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    function getFirstname()
    {
        return $this->firstname;
    }
    function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}


$people = array(
    new Person("Jonas", "Jonaitis"),
    new Person("Petras", "Petraitis"),
    new Person("Antanas", "Antanaitis")
);


foreach ($people as $person) {
    print($person->getFirstname() . ' ' . $person->getLastname() . "<br>");
}
