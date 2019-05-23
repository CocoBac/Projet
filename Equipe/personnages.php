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
		
		$this->hp = 100;
		$this->magie = 0;
		$this->force = 95;
		$this->qi = 60;
	}
}

// Familier
class Familier extends Classe
{
	function __construct()
	{
		$this->setType("Familier");
		
		$this->hp = 100;
		$this->magie = 60;
		$this->force = 43;
		$this->qi = 70;
	}
}

// Elf
class Elf extends Classe
{
	function __construct()
	{
		$this->setType("Elf");
		
		$this->hp = 100;
		$this->magie = 75;
		$this->force = 20;
		$this->qi = 75;
	}
}


