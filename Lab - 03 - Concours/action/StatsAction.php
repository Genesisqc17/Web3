<?php
    require_once("action/CommonAction.php");
    require_once("DAO/StatsDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $nombreTotal = StatsDAO::count();
            $nombreType = StatsDAO::countPerRoomType();

            return compact("nombreTotal","nombreType");
        }
    }