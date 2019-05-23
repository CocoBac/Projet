<?php

require_once(__DIR__.'\joueur.php');


class Equipe
{
		private $TabJoueurs;
		
		function __construct()
		{
			$this->TabJoueurs=array();
		}

		function addJoueur($pseudo)
		{
			$this->TabJoueurs[]=new Joueur($pseudo);	
		}

		function getTabJoueurs()
		{
			return $this->TabJoueurs;		
		}

}
