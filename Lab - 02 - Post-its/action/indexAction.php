<?php
    session_start();

    function execute(){
        $memo = null;

        if(empty($_SESSION["PostIt"])){
            $_SESSION["PostIt"] = [];
        }

        if(isset($_POST["note"]) && is_numeric($_POST["x"]) && is_numeric($_POST["y"]) && 0 < $_POST["x"] && $_POST["x"] < 1900 && 0 < $_POST["y"] && $_POST["y"] < 1000){
            $memo = [];
            $memo["x"] = $_POST["x"];
            $memo["y"] = $_POST["y"];
            $memo["note"] = $_POST["note"];
            $_SESSION["PostIt"][] = $memo;
        }

        $memolist = $_SESSION["PostIt"];
        return compact("memolist");
    }
