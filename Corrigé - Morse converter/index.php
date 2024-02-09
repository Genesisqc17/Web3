<?php
	require_once("action/index-action.php");

	$chaine = execute();

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Morse</title>
		<meta charset="utf-8" />
		<style type="text/css">
			* {
				margin:0;
				padding:0;
			}

			body {
				height:100px;
			}

			#background {
				position:fixed;
				background-image:url('images/morse.png');
				background-repeat:no-repeat;
				background-position:bottom left;
				height:400px;
				width:400px;
				bottom:0px;
				z-index:-1;
			}
		</style>
	</head>
	<body>
		<div id="background"></div>
		<div style="margin-left:300px;width:500px;position:relative;">
			<h1 style="margin-top:50px;">
				Outil de conversion Morse-ASCII
			</h1>

			<?php
				if ($chaine != null) {
					?>
					<div style="border:1px solid black; border-radius:6px; padding:5px;margin-top:30px;background-color:#999;font-weight:bold;;color:white">
						<?php echo $chaine; ?>
					</div>
					<div>
						<a href="index.php">Réessayer</a>
					</div>
					<?php
				}
				else {
					?>
					<form action="index.php" method="post">
						<h3 style="margin-top:30px;">Chaine à convertir en morse</h3>
						<textarea cols="2" rows="2" style="width:400px;height:200px;" name="ascii"></textarea>

						<h3 style="margin-top:30px;">Chaine à convertir en ASCII</h3>
						<textarea cols="2" rows="2" style="width:400px;height:200px;" name="morse"></textarea>

						<div style="padding-left:150px;">
							<input type="submit" value="Convertir" style="margin-top:30px;" />
						</div>
					</form>
					<?php
				}
			?>

		</div>
	</body>
</html>