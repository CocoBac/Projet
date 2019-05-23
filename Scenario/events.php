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

	function exe($equipe)
	{
		echo $this->texte;
	}

}

//Degats
class eventDamage extends Evenement // Virtuelle
{
	private $damage;
	private $cible;
	private $calcul;

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
		if (func_num_args()==2) { $this->calcul=func_get_arg(1); }
		else {$this->calcul="0";}
	}

	function getDamage()
	{
		return $this->damage;
	}

	function exe($equipe)
	{
		switch ($this->calcul) {
			case "+":  $this->damage=($this->getCurrent($equipe)+$this->damage); break;
			case "-":  $this->damage=($this->getCurrent($equipe)-$this->damage); break;
			case "/":  $this->damage=($this->getCurrent($equipe)/$this->damage); break;
			case "*":  $this->damage=($this->getCurrent($equipe)*$this->damage); break;
			default : break;
		}
		$this->exec($equipe);
	} // Virtuelle
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
	
	function exec($equipe)
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
	
	function exec($equipe)
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
	
	function exec($equipe)
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
	
	function exec($equipe)
	{
		$equipe->getTabJoueurs()[$this->getCible()]->getPerso()->setQi($this->getDamage());
	}

}
