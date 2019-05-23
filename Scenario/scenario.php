<?php

require_once(__DIR__.'/etape.php');

class Scenario
{
	private $etapes;
	private $nom;

	function __construct()
	{
		$etapes=array();
		$this->etapes[]=new Etape("Introduction");

		if(func_num_args()==1)	{ $this->nom=func_get_arg(0); }
		else 			{ $this->nom="Nouveau scénario"; }

	}
	
	function __destruct()
	{
		if(is_object($this->etapes[0]))
		{
			foreach ($this->getTabEtapes() as $Etp)
			{
				$Etp=null; // Suppression de toutes les etapes du scenario
			}
		}
	}
		
	function getNom()
	{
		return $this->nom;
	}

	function getTabEtapes() // Donne le tableau des étapes du scénario
	{
		return $this->etapes;
	}

	function getTabEtapesChoix($nEtape) // Donne le tableau de choix de l'étape numéro X
	{
		return $this->etapes[$nEtape]->getTabChoix();
	}

	function addEtape()
	{
		if(func_num_args()==0)	{ $this->etapes[]=new Etape(); }
		else { 
			for($i=0 ; $i<func_num_args() ; $i++) 
			{
			$this->etapes[]= new Etape(func_get_arg($i));
			}
		}
	}
	
	function toStringChoixEtape($nEtape, $nChoix) // Donne le nom du choix numéro Y de l'étape numéro X
	{
		return $this->etapes[$nEtape]->showChoix($nChoix);
	}

	function addChoixEtape($nEtape, $nomChoix)
	{
		$this->etapes[$nEtape]->addChoix($nomChoix);
	}

	function showTest()
	{
		echo $this->getNom(), " : ";
		if(is_object($this->getTabEtapes()[0]))
		{
			echo count($this->getTabEtapes()), "<br>";
			foreach($this->getTabEtapes() as $d)
			{
				echo $d->getNom(), " : ";
				if(is_object($d->getTabChoix()[0]))
				{
					foreach($d->getTabChoix() as $c)
					{
						echo $c->getNom();
						echo ", ";
					}
					echo "<br>";
				}
			}
		}
	}

	function deleteEtape($nEtape)
	{
		if(is_object($this->etapes[$nEtape]))
		{
			$taille=count($this->etapes);
			for($i=$nEtape ; $i < $taille-1 ; $i++)
			{
				$this->etapes[$i]=$this->etapes[$i+1]; 
			}
			unset($this->etapes[$taille-1]); //array_pop($this->etapes);
			
		}
	}

}









