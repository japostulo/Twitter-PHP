<?php
    namespace App\Model;
    use App\Like\Like;
    class LikeDao {
        public function create(Like $like) {
            $query = 'insert into likes (user_id, post_id) values(?, ?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $like->getUserId());
            $send->bindValue(2, $like->getPostId());

            $send->execute();
        }

        public function read() {
            $query = 'Select * from likes';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();

            if($send->rowCount() > 0) {
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        }

        public function update(Like $like) {
            $query = 'update likes set user_id = ?, post_id = ? where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $like->getUserId());
            $send->bindValue(2, $like->getPostId());
            $send->bindValue(3, $like->getId());
            $send->execute();
        }

        public function delete($id) {
            $query = 'delete from likes where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }

?>