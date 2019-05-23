<?php

require_once(__DIR__.'/evenement.php');

//Texte
class eventTexte extends Evenement
{
	private $texte;
	
	function setTexte($texte)
	{
		$this->texte=$texte;
	}

	function getTexte()
	{
		return $this->texte;
	}

	function exe()
	{
		echo $this->texte;
	}

}

//Degats
class eventDamage extends Evenement
{
	private $damage;
	private $cible;

	function getCible()
	{
		return $this->cible;
	}

	function setCible($cible) // Numéro du joueur
	{
		$this->cible=$cible;
	}

	function setDamage($damage)
	{
		$this->damage=$damage;
	}

	function getdamage()
	{
		return $this->damage;
	}

}

//Hp
class eventDamageHp extends EventDamage
{
	private $damage;
	private $cible;

	function getCurrent($equipe)
	{
		return $equipe->getTabJoueurs()[$this->getCible()]->getPerso()->getHp();	
	}
	
	function exe($equipe)
	{
		$equipe->getTabJoueurs()[$this->getCible()]->getPerso()->setHp($this->getDamage());
	}

}

//Magie
class eventDamageMagie extends EventDamage
{
	private $damage;
	private $cible;

	function getCurrent($equipe)
	{
		return $equipe->getTabJoueurs()[$this->getCible()]->getPerso()->getMagie();	
	}
	
	function exe($equipe)
	{
		$equipe->getTabJoueurs()[$this->getCible()]->getPerso()->setMagie($this->getDamage());
	}

}

//Force
class eventDamageForce extends EventDamage
{
	private $damage;
	private $cible;

	function getCurrent($equipe)
	{
		return $equipe->getTabJoueurs()[$this->getCible()]->getPerso()->getForce();	
	}
	
	function exe($equipe)
	{
		$equipe->getTabJoueurs()[$this->getCible()]->getPerso()->setForce($this->getDamage());
	}

}

//QI
class eventDamageQi extends EventDamage
{
	private $damage;
	private $cible;

	function getCurrent($equipe)
	{
		return $equipe->getTabJoueurs()[$this->getCible()]->getPerso()->getQi();	
	}
	
	function exe($equipe)
	{
		$equipe->getTabJoueurs()[$this->getCible()]->getPerso()->setQi($this->getDamage());
	}

}
