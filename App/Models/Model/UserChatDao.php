<?php
    namespace App\Model;
    use App\UserChat\UserChat;

    class UserChatDao {
        public function create(UserChat $userChat) {
            $query = 'insert into user_chat (chat_id, user_id, user_id2) values(?, ?, ?)';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $userChat->getChatId());
            $send->bindValue(2, $userChat->getUserId());
            $send->bindValue(3, $userChat->getUserId2());
            $send->execute();
        }

        public function read() {
            $query = 'select * from user_chat';
            $send = Connection::getConnection()->prepare($query);
            $send->execute();

            if($send->rowCount() > 0) {
                return $send->fetchAll(\PDO::FETCH_ASSOC);
            }
            return [];
        }

        public function update(UserChat $userChat) {
            $query = 'update user_chat set chat_id = ?, user_id = ?, user_id2 = ? where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $userChat->getChatId());
            $send->bindValue(2, $userChat->getUserId());
            $send->bindValue(3, $userChat->getUserId2());
            $send->bindValue(4, $userChat->getId());
            $send->execute();
        }

        public function delete($id) {
            $query = 'delete from user_chat where id = ?';
            $send = Connection::getConnection()->prepare($query);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }
?>