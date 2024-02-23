<?php
    class SaveDAO{
        
        public static function addfailure($data){
            file_put_contents("donnees/failed.txt", $data . "\n", FILE_APPEND);
        }

        public static function checkfailures($account){
            $data = file_get_contents("donnees/failed.txt");
            $accounts = explode("\n", $data);

            $counter = 0;
            foreach ($accounts as $a) {
                if($a == $account){
                    $counter++;
                }
            }
            if($counter >= 5){
                return true;
            }
            else{
                return false;
            }
        }
    }