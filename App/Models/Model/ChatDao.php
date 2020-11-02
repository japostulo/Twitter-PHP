<?php
    namespace App\Model;

    use App\Chat\Chat;

    class ChatDao {
        
        public function create(Chat $chat) {
            $query = 'insert into chats values(?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1,  $chat->getId());
            $send->execute();
        }

        public function read() {
            $query = 'select * from chats';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();

            if($send->rowCount() > 0){
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        }

        public function delete($id) {
            $query = 'delete from chats where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }
?>