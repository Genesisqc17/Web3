<?php
	require_once("action/IndexAction.php");

	$data = execute();

	require_once("partial/header.php");
?>
<?php
	for ($i=0; $i < $data["chickens"]; $i++) { 
		?>
		<div class="chicken" style="top:<?= rand(50,450) ?>px;left:<?= rand(50,900) ?>px"></div>
		<?php
	}
?>
<?php
	require_once("partial/footer.php");