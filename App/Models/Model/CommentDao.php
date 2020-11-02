<?php
    namespace App\Model;
    use App\Comment\Comment;

    class CommentDao {
        public function create(Comment $comment) {
            $query = 'insert into comments (comment, user_id, post_id) values(?,?,?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1 , $comment->getComment());
            $send->bindValue(2, $comment->getUserId());
            $send->bindValue(3, $comment->getPostId());

            $send->execute();
        }

        public function read() {
            $query = 'select * from comments';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();

            if(!$send) {
                echo PDO::errorInfo();
                print_r($dbh->errorInfo());
            }

            if($send->rowCount() > 0) {
                $result = $send->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }
            return [];
        }

        public function update(Comment $comment) {
            $query = 'update comments set comment = ?, user_id = ?, post_id = ? where id = ? ';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $comment->getComment());
            $send->bindValue(2, $comment->getUserId());
            $send->bindValue(3, $comment->getPostId());
            $send->bindValue(4, $comment->getId());
            $send->execute();
        }
        
        public function delete($id) {
            $query = 'delete from comments where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }



?>