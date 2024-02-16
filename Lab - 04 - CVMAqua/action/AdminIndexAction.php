<?php
    require_once("action/CommonAction.php");

    class AdminIndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
        }

        protected function executeAction() {
            
            return [];
        }
    }