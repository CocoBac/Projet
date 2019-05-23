<!DOCTYPE html >

<?php
require_once(__DIR__.'/Scenario/accueil.php');
require_once(__DIR__.'/Equipe/affichage.php');
?>

<html>

	<head>
		
		<title>Principal</title>
	
	</head>
	
	<body>
	<br>
	
	<?php
	$s = new Scenario;
	$e = new Equipe;
	$e->addJoueur("J1");
	$m = new Mage;
	$e->getTabJoueurs()[0]->setPerso($m);
	echo $e->getTabJoueurs()[0]->getPerso()->getHp();

	$d = new eventDamageHp;	
	$d->setCible(0);
	$d->setDamage($d->getCurrent($e)- 25);
	$d->exe($e);
	echo $e->getTabJoueurs()[0]->getPerso()->getHp();

	$t = new EventTexte;
	$t->setTexte("<br>Bonjour voyageur<br>Bienvenue dans le village des mages<br><br>Es-tu un mage un toi-même ?");
	$t->exe();

	?>

	</body>
	
</html>


