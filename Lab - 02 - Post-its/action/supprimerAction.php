<?php
    session_start();
    
    function execute(){
        if(!empty($_SESSION["PostIt"])){
            session_destroy();

            header("location:index.php");
            exit;

        }
        
        return [];
    }