<?php
    require_once("action/AdminIndexAction.php");

    $action = new AdminIndexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>

<?php
    require_once("partial/footer.php");