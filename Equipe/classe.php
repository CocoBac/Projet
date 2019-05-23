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
}
