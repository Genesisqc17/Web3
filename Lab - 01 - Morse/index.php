<?php
	require_once("action/indexAction.php");

	$data = execute();

	require_once("partial/header.php");
?>
<h1 style="margin-top:50px;">
	Outil de conversion Morse-ASCII

	<!-- À compléter -->
</h1>
<form action="" method="post">
	<h2>Chaine à convertir en morse</h2>
	<textarea name="morse" id="morse" cols="100" rows="20"></textarea>
	<h2>Chaine à convertir en ASCII</h2>
	<textarea name="ascii" id="ascii" cols="100" rows="20"></textarea>
	<button type="submit">Convertir</button>
</form>
<?php
	require_once("partial/footer.php");