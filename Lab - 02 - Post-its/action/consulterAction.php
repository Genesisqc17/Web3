<?php
    session_start();

    function execute(){
        
        $memolist = $_SESSION["PostIt"];
        
        return compact("memolist");
    }