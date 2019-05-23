<?php

require_once(__DIR__.'/choix.php');

class Etape
{
	private $nom;
	private $background;
	private $choix;

	function __construct()
	{
		$choix=array();
		$this->choix[]=new Choix("Nouveau Choix");

		if(func_num_args()==1)	{ $this->nom=func_get_arg(0); }
		else 			{ $this->nom="Nouvelle étape"; }
	}

	function __destruct()
	{
		if (is_object($this->choix[0])) // Suppression de tous les choix de l'etape
		{ 
			foreach ($this->choix as $Ch)
			{
				$Ch=null;
			}
		}
	}

	function getNom()
	{
		return $this->nom;
	}
	
	function getTabChoix() // Donne le tableau de choix de l'étape
	{
		return $this->choix;
	}

	function addChoix($nom)
	{
		$this->choix[]=new Choix($nom);
	}
	
	function showChoix($numero) // Donne le nom du choix numéro X de l'étape
	{
		return $this->choix[$numero]->getNom();
	}

	function deleteChoix($nChoix)
	{
		if(is_object($this->choix[$nChoix]))
		{
			$taille=count($this->choix);
			for($i=$nChoix ; $i < $taille-1 ; $i++)
			{
				$this->choix[$i]=$this->choix[$i+1]; 
			}
			unset($this->choix[$taille-1]); //array_pop($this->choix);
			
		}
	}

/*						// Partie client ? Javascript ?
	function getBackground()
	{
		return $this->background;
	}

	function setBackground($background)
	{
		$this->background=$background;
	}
*/
}
