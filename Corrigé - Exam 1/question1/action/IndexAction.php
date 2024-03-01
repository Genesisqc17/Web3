<?php
    require_once("action/CommonAction.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if (empty($_SESSION["nb"])) {
                $_SESSION["nb"] = 0;
            }

            $_SESSION["nb"]++;

            $nbPoulets = $_SESSION["nb"];

            return compact("nbPoulets");
        }
    }