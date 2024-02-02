<?php
	$mot = null;
	$mot = strlen($_GET["searchBox"]) ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon">
				
			</div>
			<form action="chaine length" method="get">
				<div id="analyze-result">
					<?php
						if(!empty($mot)){
							?>
							<div style="text-align:center;color:Navy;font-size:50px;">
								<?= $mot ?>
							</div>
							<?php
						}
						else {
							?>
							Entrez une chaîne de caractères et appuyez sur analyser
							<?php
						}
					?>
				</div>
				<div id="search-line">
					<div>
						<input type="text" name="searchBox" placeholder="Texte à analyser" />
					</div>
					<div class="btn">
						<button>Analyser</button>
				</div>
			</form>
				
			</div>
		</div>
	</body>
</html>