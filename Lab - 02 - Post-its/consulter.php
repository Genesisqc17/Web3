<?php
    require_once("action/consulterAction.php");

    $data = execute();

    require_once("partial/header.php");
?>
<h1>Les mémos...</h1>
<ul>
    <?php
        foreach($data["memolist"] as $memo){
            ?>
            <li><?= $memo["note"] ?></li>
            <?php
        }
    ?>
</ul>
<a href="index.php">Retour</a>
<?php
    require_once("partial/footer.php");
