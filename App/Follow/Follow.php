<?php
    namespace App\Follow;

    class Follow {
        private $id, $userId, $followId;
        
        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function setFollowId($followId) {
            $this->followId = $followId;
        }

        public function getFollowId() {
            return $this->followId;
        }
        
    }

?>