<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/RequeteDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $text = null;
            $_SESSION["lastChoice"] = null;

            if(!empty($_SESSION["lastChoice"])){
                $_SESSION["lastChoice"] = "";
            } 
            
            if(!empty($_POST["choice"])){
                if($_POST["choice"] == ""){
                    $text = "--";
                    $_SESSION["lastChoice"] = "";
                }
                elseif ($_POST["choice"] == "3") {
                    $text = "À venir";
                    $_SESSION["lastChoice"] = "3";
                }
                else{
                    $text = RequeteDAO::requete($_POST["choice"]);
                    $_SESSION["lastChoice"] = $_POST["choice"];
                }
            }
            $choice = $_SESSION["lastChoice"];
            return compact("text","choice");
        }
    }