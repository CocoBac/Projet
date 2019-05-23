<?php

class Classe
{
	private $type;

	private $hp;
	private $magie;
	private $force;
	private $qi;
	
	
	function getType()
	{
		return $this->type;
	}

	function setType($type)
	{
		$this->type=$type;
	}
	
	function getHp()
	{
		return $this->hp;
	}

	function setHp($hp)
	{
		$this->hp=($hp); //j'ai retirer -$damage vue que je sais pas 
						//comment tu vas instancier ça
	}
	
	function getMagie()
	{
		return $this->magie;
	}
	
	function setMagie()
	{
		$this->magie=($magie)
	}
	
	function getForce()
	{
		return $this->force;
	}
	
	function setForce()
	{
		$this->force=($force);
	}
	
	function getQi()
	{
		return $this->qi;
	}
	
	function setQi()
	{
		$this->qi=($qi);
	}
	
	
	
	
}

