<?php

    class ResultDAO {
        public static function addScore($score) {
            file_put_contents("results.txt", date("Y-m-d H:i:s", time()) . ":" . $score . "\n", FILE_APPEND);
        }

        public static function getScores() {
            $data = file_get_contents("results.txt");
            return explode("\n", $data); // tableau de lignes
        }
    }