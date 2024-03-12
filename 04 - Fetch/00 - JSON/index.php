<?php
	$tab = ["Jane", "Doe", "John", true, 3.1415];
	// var_dump($tab);
	$tabJson = json_encode($tab); //json_decode();
	echo $tabJson;
?>
<!DOCTYPE html>
<html>
	<head>
			<title>JSON</title>
			<meta charset="utf-8">
	</head>
	<body>
		<div>
			<script>
				let tab = '<?= $tabJson ?>';
				tab = JSON.parse(tab); // json_decode
				tab = JSON.stringify(tab); // json_encode
				console.log(tab);
			</script>
		</div>
	</body>
</html>
