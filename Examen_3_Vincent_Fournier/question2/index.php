<?php
	require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Question exam</title>
        <meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet" />
    </head>
    <body>
        <div class="icon">
			<h1>
				Base de données
			</h1>
			<div class="result">
				<?php
					if(!empty($data["text"])){
						?>
						<?php
							if($data["text"] == "À venir"){
								?>
								<div style="color:red;">
								<?php
							}else{
								?>
								<div>		
								<?php
							}
						?>
							<?= $data["text"] ?>
						</div>
						<?php
					}
				?>
			</div>
			<div class="info">
				<!-- Compléter la balise form -->
				<form action="" method="POST">
					<div class="form-line">
						<div>Choix : </div>
						<div>
							<select name="choice">
								<option value=""
								<?php
									if($data["choice"] == "")
										?>
										 selected
										<?php
								?>
								>--</option>
								<option value="1"
								<?php
									if($data["choice"] == '1')
										?>
										 selected
										<?php
								?>
								>Nombre total</option>
								<option value="2"
								<?php
									if($data["choice"] == '2')
										?>
										 selected
										<?php
								?>
								>Nombre filtré</option>
								<option value="3"
								<?php
									if($data["choice"] == '3')
										?>
										 selected
										<?php
								?>
								>Sauvegarder</option>
							</select>
						</div>
					</div>
					<div class="btn-section">
						<button type="submit">Afficher</button>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>