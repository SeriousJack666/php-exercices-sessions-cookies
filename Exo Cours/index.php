<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Test Php</title>
	</head>

	<body>
        <?php
            $testAjout = "yooooooooooooo";
        ?>

		<form method="GET" action="traitement.php">
			<label for="nom">Nom</label>
			<input type="text" name="nom">
			<label for="prenom">Prenom</label>
			<input type="text" name="prenom">
			<input type="submit">
		</form>

		<a href="traitement.php?<?=$testAjout ?>">Envoi en GET</a>

	</body>
</html>

