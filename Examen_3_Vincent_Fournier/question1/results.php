<?php
    require_once("action/resultsAction.php");

    $action = new ResultsAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
<div class="results-container">
    <h1>
        Résultats
    </h1>

    <?php
        foreach ($data["results"] as $result) {
            ?>
            <div><?= $result ?></div>
            <?php
        }
    ?>
</div>
<?php
    require_once("partial/footer.php");