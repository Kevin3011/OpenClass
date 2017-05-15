<?php
namespace Model{
    class dbHelper{
        private $dsn = "mysql:host=localhost;dbname=kampuskita";
        private $user = "root";
        private $pass = ""; 

        


        public static function db(){
            $dsn = "mysql:host=localhost;dbname=kampuskita";
            $user = "root";
            $pass = ""; 

            try{
                $conn = new \PDO($dsn,$user,$pass);
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
            return $conn; 
        }

    //=====================================================================4
        public function getDTM(){
            date_default_timezone_set('Asia/Bangkok');
            $t = microtime(true);
            $micro = sprintf("%06d",($t - floor($t)) * 1000000);
            $d = new \DateTime( date('y-m-d H:i:s.'.$micro, $t) );
            //Y year, m month, d day, H hour, i minutes
            return $d->format("ymdHisu");
        }
        public function getDate(){
            return date('Y-m-d');
        }
        public function getDateTime(){
            return date('Y-m-d H:i:s');
        }



        public function humanTiming ($time)
        {
            $time = strtotime($time);
            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
            }

        }

    }
}

?>