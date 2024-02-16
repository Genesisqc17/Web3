<?php
	require_once("action/ProfileAction.php");

	$action = new ProfileAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>
sdf
<?php
	require_once("partial/footer.php");