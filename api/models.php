<?php
class DBHelper{
    private $dsn = "mysql:host=localhost;dbname=kampuskita";
    private $user = "root";
    private $pass = ""; 
    private $db;
    
    function __construct(){
        try{
            $this->db = new PDO($this->dsn,$this->user,$this->pass);
        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }  
    }
    
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
    function getClassList(){
        try{
            $result = $this->db->query("SELECT cl.class_no,cl.name AS classname,cl.description,cl.type,cl.status,us.name FROM class AS cl LEFT JOIN user AS us ON cl.creator_user_id = us.id");
            return $result;  
        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

    function getClassByCode($code){
        try{
            $stmt = $this->db->prepare("SELECT cl.class_no,cl.name AS classname,cl.description,cl.type,cl.status,us.name FROM class AS cl LEFT JOIN user AS us ON cl.creator_user_id = us.id WHERE cl.class_no = ?");
            $stmt->execute(array($code));
            $result = $stmt->fetchAll();
            return $result;  
        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }            
    }





//================================================================================
    function addClass($name, $description, $category, $type){
        try{
            $stmt = $this->db->prepare("INSERT INTO user (kode_user,role,email,password,nama_user,telepon,foto) VALUES (:kode_user,:role,:email,:password,:nama_user,:telepon,:foto)");
            $stmt->execute(
                ['kode_user' => $kode_user,
				'role' => $role,
				'email' => $email,
				'password' => $password,
				'nama_user' => $nama_dosen,
				'telepon' => $telepon,
				'foto' => $foto]
                );
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }













    function insertUser($kode_user,$role,$email,$password,$nama_dosen,$telepon,$foto){
        try{
            $stmt = $this->db->prepare("INSERT INTO user (kode_user,role,email,password,nama_user,telepon,foto) VALUES (:kode_user,:role,:email,:password,:nama_user,:telepon,:foto)");
            $stmt->execute(
                ['kode_user' => $kode_user,
				'role' => $role,
				'email' => $email,
				'password' => $password,
				'nama_user' => $nama_dosen,
				'telepon' => $telepon,
				'foto' => $foto]
                );

        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

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


}

?>       