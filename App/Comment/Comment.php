<?php 
    namespace App\Comment;

    class Comment {
        
        private $id, $comment, $userId, $postId, $createdAt, $updatedAt;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setComment($comment) {
            $this->comment = $comment;
        }

        public function getComment() {
            return $this->comment;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function setPostId($postId) {
            $this->postId = $postId;
        }

        public function getPostId() {
            return $this->postId;
        }

        public function setCreateAt($createAt) {
            $this->createAt = $createAt;
        }

        public function getCreateAt() {
            return $this->createAt;
        }

        public function setUpdatedAt($updatedAt) {
            $this->updatedAt = $updatedAt;
        }

        public function getUpdatedAt() {
            return $this->updatedAt;
        }
    }
?>