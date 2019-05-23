<?php
require_once(__DIR__.'\personnages.php');

class Joueur
{
	private $pseudo;
	private $personnage;
	
	function __construct($pseudo)
	{
		$this->pseudo=$pseudo;	
	}
	
	function getPseudo()
	{
		return $this->pseudo;
	}
	
	function setPerso($perso)
	{
		$this->personnage=$perso;
	}	

	function getPerso()
	{
		return $this->personnage;
	}
}
