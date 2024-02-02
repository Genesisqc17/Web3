<?php
	// include		=> Va chercher le contenu du fichier, et s'il n'existe pas, c'est pas grave (fait un warning)
	// include_once	=> Si tu l'as déjà inclus, ne le fait pas encore
	// require		=> Si le fichier n'est pas trouvé, crash!
	require_once("lib/Utils.php");

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat : <?= resultatFormuleScientifique(1, 2) ?>
	</body>
</html>







