<?php
	require_once("action/secretAction.php");

	$data = execute();
    // var_dump($data);

    require_once("partial/header.php");
?>
<div>
    <?php
        foreach($data["spies"] as $spy){
            ?>
            <div><?= $spy ?></div>
            <?php
        }
    ?>
</div>
<?php
    require_once("partial/footer.php");
?>