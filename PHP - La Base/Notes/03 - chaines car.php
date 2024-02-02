<?php
	$mot = "Lorem ipsum sin dolori";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les chaînes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<!-- // Laravel -->
		<h1>Mot : <?= $mot ?></h1>
		<div>Longueur : <?= strlen($mot) ?> </div>
		<div>Position orem : <?= strpos($mot, "orem") ?> </div>
		<div>Remplacer : <?= str_replace("orem", "gique", $mot), $mot ?> </div>
		<div>Substring : <?= substr($mot, 0, 4) ?> </div>
	</body>
</html>







