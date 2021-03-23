<?php

class Employee
{
    function __construct($firstname = "Jurgita", $lastname = "Kat.", $age = 28, $salary = 1111)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->salary = $salary;
    }
    function getFirstname()
    {
        return $this->firstname;
    }
    function setFirstname($firstname)
    {
        if (!is_string($firstname)) {
        } else {
            $this->firstname = $firstname;
        }
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    function getAge()
    {
        return $this->age;
    }
    function setAge($age) // age 0-100
    {
        if ($age < 0 || $age > 100) {
        } else {
            $this->age = $age;
        }
    }
    function getSalary()
    {
        return $this->salary;
    }
    function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$arrayOfEmployees = array(
    new Employee("Ona", "Onaite", 65, 555),
    new Employee("Jonas", "Jonaitis", 32, 654),
    new Employee("Antanas", "Saulute", 100, 1000)
);

// Išvardinti visus darbuotojus:
print('FIRSTNAME / LASTNAME / AGE / SALARY<br>');
foreach ($arrayOfEmployees as $employee) {
    print($employee->getFirstname() . ' / ' . $employee->getLastname() . ' / ' . $employee->getAge() . ' / ' . $employee->getSalary() . "<br>");
}

// Išrikiuoti pagal varda:
print('<br>FIRSTNAME / LASTNAME / AGE / SALARY<br>');
sort($arrayOfEmployees);
foreach ($arrayOfEmployees as $employee) {
    print($employee->getFirstname() . ' / ' . $employee->getLastname() . ' / ' . $employee->getAge() . ' / ' . $employee->getSalary() . "<br>");
}

// Išrikiuoti pagal Age (jauniausias virsuj):
function sortObjectsByAge($a, $b)
{
    if ($a->age == $b->age) {
        return 0;
    }
    return ($a->age < $b->age) ? -1 : 1;
}
usort($arrayOfEmployees, 'sortObjectsByAge');

print('<br>FIRSTNAME / LASTNAME / AGE / SALARY<br>');

foreach ($arrayOfEmployees as $employee) {
    print($employee->getFirstname() . ' / ' . $employee->getLastname() . ' / ' . $employee->getAge() . ' / ' . $employee->getSalary() . "<br>");
}

// Išrikiuoti pagal Salary (didziausia virsuj):
function sortObjectsBySalary($a, $b)
{
    if ($a->salary == $b->salary) {
        return 0;
    }
    return ($a->salary > $b->salary) ? -1 : 1;
}
usort($arrayOfEmployees, 'sortObjectsBySalary');

print('<br>FIRSTNAME / LASTNAME / AGE / SALARY<br>');

foreach ($arrayOfEmployees as $employee) {
    print($employee->getFirstname() . ' / ' . $employee->getLastname() . ' / ' . $employee->getAge() . ' / ' . $employee->getSalary() . "<br>");
}
