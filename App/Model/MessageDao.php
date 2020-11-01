<?php 
    namespace App\Model;

    use App\Message\Message;

    class MessageDao {
        public function create(Message $message) {
            $query = 'insert into messages (message, user_id, chat_id) values(?, ?, ?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $message->getMessage());
            $send->bindValue(2, $message->getUserId());
            $send->bindValue(3, $message->getChatId());
            $send->execute();
        }

        public function read() {
            $query = 'select * from messages';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();

            if($send->rowCount() > 0) {
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }

            return [];
        }

        public function update(Message $message) {
            $query = 'update messages set message = ?, user_id = ?, chat_id = ? where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $message->getMessage());
            $send->bindValue(2, $message->getUserId());
            $send->bindValue(3, $message->getChatId());
            $send->bindValue(4, $message->getId());
            $send->execute();
        }

        public function delete($id) {
            $query = 'delete from messages where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }
?>