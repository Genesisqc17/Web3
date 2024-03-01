<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>La basse-cour</title>
		<link rel="stylesheet" href="css/global.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Bienvenue à la basse-cour</h1>
		<div class="frame">
			<div id="container">
				<?php
					for ($i=0; $i < $data["nbPoulets"]; $i++) { 
						?>
						<div class="chicken" style="top:<?= rand(0, 450) ?>px;left:<?= rand(0, 950) ?>px"></div>						
						<?php
					}
				?>
			</div>
		</div>
		<div class="center">
			<form action="index.php" method="get">
				<input type="hidden" name="clear" value="1">
				<button>Vider</button>
			</form>
		</div>
	</body>
</html>