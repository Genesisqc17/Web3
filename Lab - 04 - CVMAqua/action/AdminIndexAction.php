<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/ContentDAO.php");

    class AdminIndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
        }

        protected function executeAction() {
            if(!empty($_GET["texte"])){
                contentDAO::setContent($_GET["texte"]);
            }
            return [];
        }
    }