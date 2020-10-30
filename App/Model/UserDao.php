<?php
    namespace App\Model;
    use App\User\User;
    class UserDao {

        public function create(User $user) {
            $sql = 'insert into users (username, email, password, image, name) values (?,?,?,?,?)';
            $send = Connection::getConnection()->prepare($sql);

            $send->bindValue(1, $user->getUsername());
            $send->bindValue(2, $user->getEmail());
            $send->bindValue(3, $user->getPassword());
            $send->bindValue(4, $user->getImage());
            $send->bindValue(5, $user->getName());

            $send->execute();
        }

        public function read() {
            $sql = 'select * from users';
            $send= Connection::getConnection()->prepare($sql);
            $send->execute();

            if($send->rowCount() > 0) {
                $result = $send->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }
            return [];
        }
        public function update(User $user) {
            $sql = 'update users set username = ?, email = ?, password = ?, image = ?, name = ? where id = ?';
            $send = Connection::getConnection()->prepare($sql);

            $send->bindValue(1, $user->getUsername());
            $send->bindValue(2, $user->getEmail());
            $send->bindValue(3, $user->getPassword());
            $send->bindValue(4, $user->getImage());
            $send->bindValue(5, $user->getName());
            $send->bindValue(6, $user->getId());

            $send->execute();
        }

        public function delete($id) {
            $sql = 'delete from users where id = ?';
            $send = Connection::getConnection()->prepare($sql);
            $send->bindValue(1, $id);
            $send->execute();
        }
    }
?>