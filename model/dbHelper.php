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

    }
}

?>