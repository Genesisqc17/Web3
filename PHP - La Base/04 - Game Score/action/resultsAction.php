<?php
    
    function execute(){
        
        $data = file_get_contents("resultats.txt");
        $lines = explode("\n", $data);

        return compact("lines");
    }