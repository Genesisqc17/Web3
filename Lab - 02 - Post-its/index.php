<?php
	require_once("action/indexAction.php");

	$data = execute();

	require_once("partial/header.php");
?>
<form action="" method="post">
	Qu'avez-vous en tête: <input type="text" name="note" id="note">
	x: <input type="text" name="x" id="x">
	y: <input type="text" name="y" id="y">
	<button type="submit">Ajouter</button>
</form>
<div>
	<a href="consulter.php">Consulter</a> | 
	<a href="supprimer.php">Supprimer</a>
</div>
<div>
	<?php
		foreach($data["memolist"] as $memo){
			?>
			<div style="background-image:url('images/post-it.png');padding:50px;position:absolute;top:<?= $memo["x"] ?>px;left:<?= $memo["y"] ?>px;width:200px;height:200px;"><?= $memo["note"] ?></div>
			<?php
		}
	?>
</div>
<?php
	require_once("partial/footer.php");