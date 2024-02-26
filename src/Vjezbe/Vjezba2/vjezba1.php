<?php

class User
{

	public $name;

	function __construct($name)
	{
		// This is initializing the class properties 
		$this->name = $name;
	}

	function getName()
	{
		return $this->name;
	}

	static function generirajOIB(): int
	{
		return 40136981759;
	}
}

$user = new User("Pero");
echo $user->getName();

// echo $user->generirajOIB();
echo intval(User::generirajOIB()).PHP_EOL;
echo User::generirajOIB().PHP_EOL;
