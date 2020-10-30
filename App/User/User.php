<?php
    namespace App\User;

    class User {
        private $id, $username, $name, $email;


        public function __construct($id,$username, $name, $email) {
            $this->setId($id);
            $this->setUsername($username);
            $this->setName($name);
            $this->setEmail($email);
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function print() {
            echo 'Username: ' .$this->username .'<br/> Name:' .$this->name .'<br/> E-mail: ' .$this->email;
        }



    }
?>