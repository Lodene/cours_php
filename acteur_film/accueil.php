<?php
	include("./modele/copie.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
</head>
<body>
	<main>
		<?php
			 $test = $Muser->co_deco("1");
			 echo $test;
		?>
		<h1> Que voulez-vous faire ? </h1>
		<a href="film.php">voir la liste des films</a> </br>
		<a href="acteur.php">voir la liste des acteurs</a> </br>
		<?php 
			$test = $Muser->co_deco("2");
			echo $test;
		?>
		<a href="../index.php">Revenir à la page d'accueil</a> </br>
	</main>
</body>
</html>