<!DOCTYPE html >

<?php
require_once(__DIR__.'/scenario.php');
?>

<html>

	<head>
		
		<title>Accueil</title>
		<link rel = "stylesheet" href="style.css"/>
		<!-- <meta http-equiv="refresh" content="5"> -->
		
	</head>
	
	<body class=body>
		
		<div class=bloc_team>
		<center><h1>Bloc Team</h1></center>
		actions d'un choix
		</div>
		
		
		<div class=bloc_choix>
		<center><h1><span style="color:red">Bloc Choix</span></h1></center>
		iii
		<p>i i i i i i</p>
		</div>
		
		
		<?php
		
		for($i=0 ; $i<12 ; $i++){ echo "<br>"; }
		/*
		$s = new Scenario("Test1");
		$s->addEtape(2,3,4,5,6,7);
		$s->getTabEtapes()[0]->addChoix("Etape0Choix0");
		$s->getTabEtapes()[0]->addChoix("Etape0Choix1");
		$s->getTabEtapes()[0]->addChoix("Etape0Choix2");
		$s->addChoixEtape(1,"Etape1Choix0");// ^ ^ ^ ^ Equivalent
		$s->addChoixEtape(1,"Etape1Choix1");
		$s->addChoixEtape(1,"Etape1Choix2");
		$s->addChoixEtape(2,"Etape2Choix0");
		$s->addChoixEtape(2,"Etape2Choix1");
		$s->addChoixEtape(3,"Etape3Choix0");
		$s->addChoixEtape(3,"Etape3Choix1");
		
		
		$s->showTest();
		echo "Etape 3, Choix 2 : ", $s->toStringChoixEtape(2,1);
		echo "<br><br>";
		
		$s->deleteEtape(2);
		$s->getTabEtapes()[2]->deleteChoix(1);
		$s->showTest();
		echo "Etape 3, Choix 2 : ", $s->toStringChoixEtape(2,1);
		echo "<br><br>";
		
		$s=null;
		
		echo "<br>";
		*/
		?>
	
	</body>
	
</html>


