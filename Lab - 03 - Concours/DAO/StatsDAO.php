<?php
    
    class StatsDAO{
        public static function save($name, $roomType){
            file_put_contents("infoConcours.txt",$name . ";" . $roomType . ";" . "\n", FILE_APPEND);
        }

        public static function count(){
            $count = 0;
            $info = file_get_contents("infoConcours.txt");
            $participants = explode("\n", $info);
            foreach ($participants as $p){
                if(strlen($p) > 0)
                $count++;
            }
            return $count;
        }

        public static function countPerRoomType(){
            $count = [
                "Simple" => 0,
                "Double" => 0,
                "Suite" => 0
            ];
            
            $info = file_get_contents("infoConcours.txt");
            $participants = explode("\n", $info);
            foreach ($participants as $p){
                $Choices = explode(";", $p); 
                foreach ($Choices as $c){
                    if($c == "Simple")
                        $count["Simple"] += 1;
                    elseif($c == "Double")
                        $count["Double"] += 1;
                    elseif($c == "Suite")
                        $count["Suite"] += 1;
                }
            }
           

            return $count;
        }
    }