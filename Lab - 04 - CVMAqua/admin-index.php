<?php
    require_once("action/AdminIndexAction.php");

    $action = new AdminIndexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
<form action="" method="get">
    <textarea name="texte" id="editeur" cols="120" rows="30"></textarea>
    <button type="submit">Editer</button>
</form>
<?php
    require_once("partial/footer.php");