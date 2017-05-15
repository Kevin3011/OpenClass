<?php
namespace Model{
    include_once('autoloader.php');
    class classDiscussionModel extends dbHelper{
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
        public function getByDiscussionId($id){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT ds.title, ds.description, ds.datetime_crt, us.name, us.picture FROM discussion AS ds
                                            LEFT JOIN user AS us ON ds.user_id = us.id 
                                            LEFT JOIN class AS cl ON ds.class_id = cl.id 
                                            WHERE ds.discussion_no = ?");
                $stmt->execute(array($id));
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }
        public function getCommentByDiscussionId($id){
            try{
                $con = self::db();
                $stmt = $con->prepare("SELECT dsdt.comment, dsdt.datetime_crt, us.name, us.picture FROM discussion_detail AS dsdt
                                            LEFT JOIN user AS us ON dsdt.user_id = us.id 
                                            LEFT JOIN discussion AS ds ON dsdt.discussion_id = ds.id 
                                            WHERE ds.discussion_no = ?");
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }    
        }

        public function addDiscussion($discussion_no,$title,$description,$datetime_crt,$class_code,$id_user){
             try{
                $con = self::db();
                $query = "INSERT INTO discussion 
                            (discussion_no,title,description,datetime_crt,class_id,user_id)
                        VALUES 
                            (:discussion_no, :title, :description, :datetime_crt,  (SELECT MAX(id) FROM class WHERE class_code = :class_code) , (SELECT MAX(id) FROM user WHERE id_user = :id_user))";
                
                $stmt = $con->prepare($query);
                $stmt->execute(
                    ['discussion_no' => $discussion_no,
                    'title' => $title,
                    'description' => $description,
                    'datetime_crt' => $datetime_crt,
                    'class_code' => $class_code,
                    'id_user' => $id_user
                        ]
                    );
                    
                    
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function replyDiscussion($comment,$datetime_crt,$discussion_no,$id_user){
             try{
                $con = self::db();
                
                $query = "INSERT INTO discussion_detail 
                            (comment,datetime_crt,discussion_id,user_id)
                            VALUES 
                            (:comment,:datetime_crt,
                            (SELECT MAX(id) FROM discussion WHERE discussion_no = :discussion_no),
                            (SELECT MAX(id) FROM user WHERE id_user = :id_user))";
                
                
                $stmt = $con->prepare($query);
                $stmt->execute(
                    ['comment' => $comment,
                    'datetime_crt' => $datetime_crt,
                    'discussion_no' => $discussion_no,
                    'id_user' => $id_user
                        ]
                    );
                    
                    
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }


    }
}