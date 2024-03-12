<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/ResultDAO.php");

    class ResultsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $results = ResultDAO::getScores();

            return compact("results");
        }
    }