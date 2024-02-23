<?php

	require_once("action/IndexAction.php");
	
	$action = new IndexAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>
	<div id="pageIndex">
		<form action="index.php" method="post">
			<div>
				<div class="authSection">
				
					<h1>Authentification</h1>
					
					<div class="authFormFields">
					
						<?php
							if (!empty($data["errorMessage"])) {
								?>
								<div class="wrongInfoProvidedSection">
									<?= $data["errorMessage"] ?>
								</div>
								<?php
							}
						?>
					
						<div class="formLabel">
							<label for="username">Nom usager :</label>
						</div>
						<div class="formInput">
							<input type="text" name="username" id="password" />
						</div>
						<div class="formSpacer"></div>
						
						<div class="formLabel">
							<label for="password">Mot de passe :</label>
						</div>
						<div class="formInput">
							<input type="password" name="password" id="password" />
						</div>
						<div class="formSpacer"></div>
						
						<div class="formLabel">
							<input type="submit" value="Authentifier" />
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
<?php
	require_once("partial/footer.php");
	
	