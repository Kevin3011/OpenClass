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
/*        ++++++
        function fetchData($query){
            try{
                $result = $this->db->query($query);
                return $result;  
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }  
        }

        /*
        SELECT Customers.CustomerName, Orders.OrderID
        FROM Customers
        LEFT JOIN Orders
        ON Customers.CustomerID=Orders.CustomerID
        */


    //=====================================================================4
        public function getDTM(){
            date_default_timezone_set('Asia/Bangkok');
            $t = microtime(true);
            $micro = sprintf("%06d",($t - floor($t)) * 1000000);
            $d = new \DateTime( date('y-m-d H:i:s.'.$micro, $t) );
            //Y year, m month, d day, H hour, i minutes
            return $d->format("ymdHisu");
        }
    //================================================================================

    //===================================================================================

/*
        function deleteUser($id){
            try{
                $sql = "DELETE FROM user WHERE kode_user = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->execute(['id'=>$id]);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        function getUser(){
            $user = array();
            try{    
                $result = $this->fetchData("SELECT kode_user,role,email,nama_user,telepon,foto FROM user");
                while($row = $result->fetch()){
                    array_push($user, new userClient($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]));
                }
            }catch(PDOException $e){
                echo $e.getMessage();
            }
            return $user;
        }

        function getUserById($id){
            $user = null;
            try{
                $stmt = $this->db->prepare("SELECT kode_user,role,email,nama_user,telepon,foto FROM user WHERE kode_user = ?");
                if ($stmt->execute(array($id))) {
                    while ($row = $stmt->fetch()) {
                        $user = new userClient($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
                    }
                    return $user;
                }
            }catch(Exception $e){
                echo $e.getMessage();
            }
            
            
        }   

*/
    }
}

?>