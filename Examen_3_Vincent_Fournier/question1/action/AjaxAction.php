<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/ResultDAO.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = "";
            
            if(!empty($_POST["pointage"])){
                ResultDAO::addScore($_POST["pointage"]);
            }

            $result = len(ResultDao::getScore());
            return compact("result");
        }
    }