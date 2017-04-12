<?php
namespace Model{
    include_once('autoloader.php');
    
    class userModel extends dbHelper{
        public function checkUser($user, $pass){
            $stmt;
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT id_user,user,role,name,phone,picture FROM user WHERE user = :user && pass = :pass");
                $stmt->execute([
                    'user' => $user,
                    'pass' => $pass
                ]);
                $result = $stmt ->fetch();
                return $result;  
            }catch(PDOException $e){
                echo $e->getMessage();   
            }
        }
        
    }
}
?>