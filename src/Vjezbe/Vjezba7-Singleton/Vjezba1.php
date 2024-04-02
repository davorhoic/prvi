<?php

// General singleton class.

/**
 * Klasa smije imati JEDAN i SAMO JEDAN instancirani objekt:
 * Kreiram klasu, postavim konstruktor na private
 * kako bih spriječio instanciranje s new
 * static metodom provjerim jel postoji neko static svojstvo
 * ukoliko postoji vrati instancu, inače kreiraj novu instancu
 */
class Singleton
{
  // Hold the class instance.
  private static $instance = null;
  public $name="xyz";

  // The constructor is private
  // to prevent initiation with outer code.
  private function __construct()
  {
    // The expensive process (e.g.,db connection) goes here.
  }

  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }
}

try {

 // $object4 = new Singleton(); // __construct() je private!
 // $object5 = new Singleton();
} catch (\Throwable $th) {
  echo "greška: " . $th->getMessage();
}

$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();
$object3 = Singleton::getInstance();
// All the variables point to the same object.

echo "Object1.name: ".$object1->name.PHP_EOL;
$object2->name="tralala";

echo "Object1.name: ".$object1->name.PHP_EOL;
echo "Object2.name: ".$object2->name.PHP_EOL;
echo "Object3.name: ".$object3->name.PHP_EOL;