<?php

// Declare the class
/**
 * Klasa User opisuje objekt user
 */
class User
{

    // properties
    public $name;

    private $godine;

    public function __construct(string $name = "Joe", int $godine = 0)
    {
        $this->setName($name) ;
        $this->godine = $godine;
    }

    // method that return $name
    public function getName(): string  // Accessor (getteri / setteri)
    {
        return $this->name;
    }

    public function setName(string $ime): void
    { // mutator
        $this->name=ucfirst($ime) ;
    }

    public function punoljetan(): bool  // Accessor (getteri / setteri)
    {
        return ($this->godine < 18) ? false : true;
    }

    public function getGodine(): int
    { // getter
        return $this->godine;
    }
    public function setGodine(int $god): void
    { // setter
        $this->godine = $god;
    }
}

// Create an instance
// Instanca klase User je objekt $user

$user = new User();
echo $user->getName().PHP_EOL;

// Može ovako ili preko mutatora
$user->name = 'ivica';

$user->setName('ivica');
//$user->godine = 33;
echo $user->getName().PHP_EOL;
// echo $user->godine;
$user2 = new User("marica", 23);
echo $user2->getName().PHP_EOL;
// ne mogu dohvatiti jer jer private
// echo $user2->godine;
// je li Marica punoljetna
echo $user2->punoljetan().PHP_EOL;
// je li Ivica punoljetan
echo $user->punoljetan().PHP_EOL;
echo false;
