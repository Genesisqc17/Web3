<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i=0; $i < 100; $i++) { 
				// phpr = fermer puis ouvrir php
				?>
				
				<?php
				?>
				<div>
					<input type="radio" name="info" value="<?= $i ?>"> <?= $i ?>
				</div>
				<?php
			}

			$length = 0;

			while($length < 10){
				$length++;
				echo $length;
			}

			$tab = array(); // ou $tab = [];
			$tab[] = "Hello"; // push!
			// $tab = [] // Ce n'est pas la mm chose
			$tab[] = "World";

			?>
			<div>
				foreach of array 
			</div>
			<?php

			foreach($tab as $element){
				echo $element;
			}

			// echo $tab;
			// echo ne prend qu'une variable simple
			// var_dump($tab); // Debug function to see what's inside a variable
			

		?>
	</body>
</html>







