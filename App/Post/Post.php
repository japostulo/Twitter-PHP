<?php
    namespace App\Post;

    class Post {
        private $id, $post, $userId;
        
        public function __construct() {

        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function getId() {
            return $this->id;
        }

        public function setPost($post) {
            $this->post = $post;
        }
        
        public function getPost() {
            return $this->post;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }
        
        public function getUserId() {
            return $this->userId;
        }

    }

?>
