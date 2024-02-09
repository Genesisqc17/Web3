<?php
    session_start();

    function execute() {
        session_destroy();

        header("location:index.php");
        exit;

        return [];
    }