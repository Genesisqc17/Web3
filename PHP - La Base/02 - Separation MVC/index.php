<!-- action = controleur (MVC) -->
<?php
	require_once("action/indexAction.php");

	// $data = les variables php necessaires pour l'affichage
	$data = execute();
	// $data["showErrorMessage"]

	require_once("partial/header.php");
?>

<h1>
	Authentification nécessaire
</h1>
<?php
	if($data["showErrorMessage"]){
		?>
		<div style="color:red;text-align:center;">
			Connexion erronée!
		</div>
		<?php
	}
?>
<form action="" method="post">
	<div class="formLabel"><label for="courriel"> Courriel : </label></div>
	<div class="formInput"><input type="text" name="champCourriel" /></div>
	<div class="formSeparator"></div>
	
	<div class="formLabel"><label for="pwd"> Mot de passe : </label> </div>
	<div class="formInput"><input type="password" name="champMotDePasse" /></div>
	<div class="formSeparator"></div>
	
	<div class="formLabel">&nbsp;</div>
	<div class="formInput"><input type="image" src="images/submit.png" /></div>
	<div class="formSeparator"></div>
</form>
<?php
	require_once("partial/footer.php");
?>