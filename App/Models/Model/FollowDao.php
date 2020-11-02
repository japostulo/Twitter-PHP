<?php 
    namespace App\Model;

    use App\Follow\Follow;

    class FollowDao {

        public function create(Follow $follow) {
            $query = 'insert into follows (user_id, follow_id) values(?,?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $follow->getUserId());
            $send->bindValue(2, $follow->getFollowId());
            $send->execute();
        }

        public function read() {
            $query = 'select * from follows';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();
            
            if($send->rowCount() > 0) {
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        }

        public function update(Follow $follow) {
            $query = 'update follows set user_id = ?, follow_id = ? where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $follow->getUserId()); 
            $send->bindValue(2, $follow->getFollowId());
            $send->bindValue(3, $follow->getId());

            $send->execute();
        }

        public function delete($id) {
            $query = 'delete from follows where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }

?>