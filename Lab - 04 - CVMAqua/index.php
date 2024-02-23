<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>
			<div id="page-index">
				<img src="images/water-drop.png" alt= ""/>
				<?php
					if(!empty($data["texte"])){
						?>
						<?= $data["texte"] ?>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php
	require_once("partial/footer.php");