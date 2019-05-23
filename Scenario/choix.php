<?php

require_once(__DIR__.'/events.php');

class Choix
{
	private $nom;
	private $events;

	function __construct()
	{
		if(func_num_args()==1)	{ $this->nom=func_get_arg(0); }
		else 			{ $this->nom="Nouveau choix"; }
		// event 1 de base
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

	function getTabEvent() // Donne le tableau d'events du choix
	{
		return $this->events;
	}

	function addEvent($event)
	{
		$this->events[]=$event;
	}
	
	function exeEvent($equipe) // 
	{
		if(func_num_args()==2)	{ $this->getTabEvent()[func_get_arg(1)]->exe($equipe); }
		else {
			foreach($this->getTabEvent() as $ev)
			{
				$ev->exe($equipe);
			}
		}
	}
}
