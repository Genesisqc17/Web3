<?php
    require_once("action/resultsAction.php");

    $Data = execute();

    require_once("partial/header.php");
?>
<div class="results-container">
    <h1>
        Résultats
    </h1>
    
    <div>2020-12-12 8:23:13 - 8.354 secondes</div>
    <div>2020-12-11 12:43:44 -  7.123 secondes</div>
    <div>2020-12-11 11:20:47 - 5.123 secondes</div>
    <div>2020-12-11 11:18:01 - 7.13 secondes</div>
    <div>2020-12-11 10:20:36 - 10.984 secondes</div>
    
    <?php
        foreach ($Data["lines"] as $line){
            ?>
            <div><?= $line ?></div>
            <?php
        }
    ?>

</div>
<?php
    require_once("partial/footer.php");
