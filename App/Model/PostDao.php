<?php
    namespace App\Model;
    use App\Post\Post;

    class PostDao {
        
        public function create(Post $post) {
            $query = 'insert into posts (post, user_id) values (?,?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $post->getPost());
            $send->bindValue(2, $post->getUserId());
            $send->execute();
        }

        public function read() {
            $query = 'select * from posts';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();
            if($send->rowCount() > 0) {
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        }

        public function update(Post $post) {
            $query = 'update posts set post = ? where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $post->getPost());
            $send->bindValue(2, $post->getId());
            $send->execute();
        }

        public function delete($id) {
            $query = 'delete from posts where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }
?>