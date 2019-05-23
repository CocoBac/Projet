<?php

class Classe
{
	private $type;

	private $hp;
	private $magie;
	private $force;
	private $qi;
	
	function __construct()
	{

	}	
	//Type
	function getType()
	{
		return $this->type;
	}

	function setType($type)
	{
		$this->type=$type;
	}
	//Hp
	function getHp()
	{
		return $this->hp;
	}

	function setHp($hp)
	{
		$this->hp=$hp;
	}
	//Magie
	function getMagie()
	{
		return $this->magie;
	}

	function setMagie($magie)
	{
		$this->magie=$magie;
	}
	//Force
	function getForce()
	{
		return $this->force;
	}

	function setForce($force)
	{
		$this->force=$force;
	}
	//QI
	function getQi()
	{
		return $this->qi;
	}

	function setQi($qi)
	{
		$this->qi=$qi;
	}
}
