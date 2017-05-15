<?php
namespace Model{
    include_once('autoloader.php');
    class classDocumentModel extends dbHelper{
        public function getListById($class_code){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT ds.discussion_no, ds.title, ds.description, ds.datetime_crt, us.name, us.picture FROM discussion AS ds 
                                            LEFT JOIN user AS us ON ds.user_id = us.id 
                                            LEFT JOIN class AS cl ON ds.class_id = cl.id 
                                            WHERE cl.class_code = ? ");
                $stmt->execute(array($class_code));
                $result = $stmt->fetchAll();
                return $result;

            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }
}