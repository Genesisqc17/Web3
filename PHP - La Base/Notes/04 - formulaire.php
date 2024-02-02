<?php
	$info = null;

	// Methode 1
	// $ var = $v1 ?? $v2; 
	// Si $v1 existe et n'est pas null, prends $v1, sinon $v2
	$info = $_GET["info"] ?? null;

	// Methode 2
	// !empty = variable existe, n'est pas nulle,
	// n'est pas "" et n'est pas 0
	if(!empty($_GET["info"])){
		$info = $_GET["info"]; // $_POST si method = post
		// echo $info;
	}
?>
<!-- backend first then frontend -->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if(!empty($info)){
				?>
				<div style="color:red;background-color:pink;padding:2px">
				Vous avez spécifié : <?= $info ?>
				</div>
				<?php
			}
		?>
		<form action="04 - formulaire.php" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







