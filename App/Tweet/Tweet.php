<?php
    namespace App\Tweet;

    class Tweet {
        private $id, $post;
        
        public function __construct($id, $post) {
            $this->setId($id);
            $this->setPost($post);
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

        public function print() {
            echo 'id: ' .$this->id .'<br/> post:' .$this->post .'<br/> ';
        }
    }

?>
