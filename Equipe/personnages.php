<?php
require_once(__DIR__.'\classe.php');

// Mage
class Mage extends Classe
{
	function __construct()
	{
		$this->setType("Mage");

		$this->setHp(100);
		$this->setMagie(90);
		$this->setForce(30);
		$this->setQi(80);
	}
}

// Combattant
class Combattant extends Classe
{
	function __construct()
	{
		$this->setType("Combattant");
		
		$this->setHp(100);
		$this->setMagie(0);
		$this->setForce(95);
		$this->setQi(60);
	}
}

// Familier
class Familier extends Classe
{
	function __construct()
	{
		$this->setType("Familier");
		
		$this->setHp(100);
		$this->setMagie(60);
		$this->setForce(43);
		$this->setQi(70);
	}
}

// Elf
class Elf extends Classe
{
	function __construct()
	{
		$this->setType("Elf");
		
		$this->setHp(100);
		$this->setMagie(75);
		$this->setForce(20);
		$this->setQi(75);
	}
}


