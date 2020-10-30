<?php
    namespace App\User;

    class User {
        private $id, $username, $name, $email, $password, $image;


        public function __construct() {
        
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

        public function setPassword($password) {
            $this->password = $password;
        }
        
        public function getPassword() {
            return $this->password;
        }

        public function setImage($image) {
            $this->image = $image;
        }
        
        public function getImage() {
            return $this->image;
        }
        public function print() {
            echo 'Username: ' .$this->username .'<br/> Name:' .$this->name .'<br/> E-mail: ' .$this->email;
        }



    }
?>