<?php

require_once(__DIR__.'/events.php');

class Choix
{
	private $nom;
	private $evenements;

	function __construct()
	{
		if(func_num_args()==1)	{ $this->nom=func_get_arg(0); }
		else 			{ $this->nom="Nouveau choix"; }
	}
	
	function __destruct()
	{
		// A faire
	}

	function getNom()
	{
		return $this->nom;
	}

	function setNom($nom)
	{
		$this->nom=$nom;
	}
}
