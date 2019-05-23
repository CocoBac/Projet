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
	$s->addEtape("HpMage","ForceCombattant");
	$s->getTabEtapes()[1]->addChoix("Hp Mage baisse de 25");
	$s->getTabEtapes()[2]->addChoix("Force Combattant baisse de 90");
	$s->getTabEtapes()[2]->addChoix("Force Combattant gagne 10");

	$e = new Equipe;
	$e->addJoueur("J1");
	$e->addJoueur("J2");
	$m = new Mage;
	$c = new Combattant;
	$e->getTabJoueurs()[0]->setPerso($m);
	$e->getTabJoueurs()[1]->setPerso($c);
	
	echo "Mage Hp : ", $e->getTabJoueurs()[0]->getPerso()->getHp();
	
	$dhp = new eventDamageHp($e);
	$dhp->setCible(0);
	$dhp->setDamage(25, "-");
	$s->getTabEtapes()[1]->getTabChoix()[1]->addEvent($dhp);
	$s->getTabEtapes()[1]->getTabChoix()[1]->exeEvent($e, 0);

	echo " -> ", $e->getTabJoueurs()[0]->getPerso()->getHp();

	echo "<br>Combattant Force : ", $e->getTabJoueurs()[1]->getPerso()->getForce();
	
	$df = new eventDamageForce($e);
	$df->setCible(1);
	$df->setDamage(90, "-");
	$s->getTabEtapes()[2]->getTabChoix()[1]->addEvent($df);

	$pf = new eventDamageForce($e);
	$pf->setCible(1);
	$pf->setDamage(10, "+");
	$s->getTabEtapes()[2]->getTabChoix()[1]->addEvent($pf);

	$s->getTabEtapes()[2]->getTabChoix()[1]->exeEvent($e);
	echo " -> ", $e->getTabJoueurs()[1]->getPerso()->getForce();











	?>

	</body>
	
</html>


