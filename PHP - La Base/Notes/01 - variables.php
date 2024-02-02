<?php
	// Commentaire type 1
	# COmmentaire type 2
	/* Commentaire multi-lignes */

	$val = 3;
	$val = "John";
	
	if($val == "John"){
		$val = $val . " Smith"; // . = concatene in php
	}

	/* <?= $val ?> 
	est egal a 
	<?php	echo $val; ?>
	*/
	
	// phpt = ouvrir puis fermer php
	// phpe (un echo)
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables <?= $val ?></title>
		<meta charset="utf-8" />
	</head>
	<body>
		Nom : <?php
			echo $val;
		?>
	</body>
</html>







