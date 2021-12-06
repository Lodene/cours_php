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
			if (isset($_SESSION['pseudo'])){
				echo "Bonjour " . $_SESSION['pseudo'] . " ! Vous etes un " . $_SESSION['type'];
				echo "<br><a href='logout.php'>Se déconnecter</a></br>";
			} else {
				echo "Hésite pas à te co bg";
				echo "<br><a href='login.php'>Se connecter</a></br>";
			}
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