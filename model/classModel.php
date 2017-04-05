<?php
namespace Model{
    include_once('autoloader.php');
    class classModel extends dbHelper{

        public function getWallList($code){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT wl.title, wl.description, wl.datetime_crt, us.name FROM wall AS wl
                                                LEFT JOIN class AS cl ON wl.id = cl.id
                                                LEFT JOIN user AS us ON cl.id = us.id
                                                WHERE cl.class_code = ?");
                $stmt->execute(array($code));
                $result = $stmt->fetchAll();
                return $result;            
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }

        public function getClassMember($code){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT us.name,gr.isAccepted,gr.dateJoin FROM group_class_user AS gr 
                                                LEFT JOIN user AS us ON gr.user_id = us.id
                                                LEFT JOIN class AS cl ON gr.class_id = cl.id
                                                WHERE cl.class_code = ?");
                $stmt->execute(array($code));
                $result = $stmt->fetchAll();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }

        public function getClassList(){
            try{
                $con = self::db();
                $result = $con->query("SELECT cl.class_code,cl.name AS classname,cl.description,cl.type,cl.isActive,us.name FROM class AS cl LEFT JOIN user AS us ON cl.creator_user_id = us.id");
                return $result;  
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }

        public function getClassListByUser($user){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT us.name,gr.isAccepted,gr.dateJoin FROM group_class_user AS gr 
                                                LEFT JOIN user AS us ON gr.user_id = us.id
                                                LEFT JOIN class AS cl ON gr.class_id = cl.id
                                                WHERE cl.class_code = ?");
                $stmt->execute(array($code));
                $result = $stmt->fetchAll();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }

        public function getClassByCode($code){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT cl.class_code,cl.name AS classname,cl.description,cl.type,cl.isActive,us.name,cc.name AS category_name FROM class AS cl 
                                                    LEFT JOIN user AS us ON cl.creator_user_id = us.id
                                                    LEFT JOIN class_category AS cc ON cl.class_category_id = cc.id
                                                    
                                                    WHERE cl.class_code = ?");
                $stmt->execute(array($code));
                $result = $stmt->fetch();
                return $result;  
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }            
        }


        public function addClass($name, $description, $category, $type, $id_user){
        try{
                $con = self::db();
                $query = "INSERT INTO class 
                            (class_code,name,description,type,isActive,creator_user_id,class_category_id)
                        VALUES 
                            (:class_code, :name, :description, :type, :isActive, (SELECT MAX(id) FROM user WHERE id_user = :id_user), :category)";
                
                $stmt = $con->prepare($query);
                $stmt->execute(
                    ['class_code' => self::getDTM(),
                    'name' => $name,
                    'description' => $description,
                    'type' => $type,
                    'isActive' => 1,
                    'id_user' => $id_user,
                    'category' => $category]
                    );
                    
                    
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
}



?>