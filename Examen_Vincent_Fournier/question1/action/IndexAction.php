<?php
    function execute(){
        if(!empty($_GET["reset"])){
            file_put_contents("data/chickens.txt", 0);
        }

        $chickens = file_get_contents("data/chickens.txt");
        $chickens++;
        file_put_contents("data/chickens.txt", $chickens);

        return compact("chickens");
    }
