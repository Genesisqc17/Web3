<?php
    require_once("action/CommonAction.php");
    require_once("DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $MessageDejaInscrit = false;

            if(empty($_SESSION["isInscrit"])){
                $_SESSION["isInscrit"] = false;
            }

            if(isset($_POST["name"]) && isset($_POST["type"]) && $_SESSION["isInscrit"] == false){
                StatsDAO::save($_POST["name"], $_POST["type"]);
                $_SESSION["isInscrit"] = true;
            } elseif($_SESSION["isInscrit"] == true){
                $MessageDejaInscrit = true;
            }
            return compact("MessageDejaInscrit");
        }
    }