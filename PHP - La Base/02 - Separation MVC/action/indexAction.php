<?php
    
    function execute(){
        $showErrorMessage = false;

        // Avant de lire $_POST, verifier si la variable existe!
        if(!empty($_POST["champCourriel"]) && !empty($_POST["champMotDePasse"])){

            //$showErrorMessage = true;
            
            if($_POST["champCourriel"] == "test@test.com" && $_POST["champMotDePasse"] == "test"){
                // Connection OK!
                header("location:secret.php");
                exit;
            }
            else{
                $showErrorMessage = true;
            }
        }

        
        
        
        return compact("showErrorMessage");
    }