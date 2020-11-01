<?php
    namespace App\UserChat;
    
    class UserChat {
        private $id, $chatId, $userId, $userId2, $createdAt, $updatedAt;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setChatId($chatId) {
            $this->chatId = $chatId;
        }

        public function getChatId() {
            return $this->chatId;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function setUserId2($userId2) {
            $this->userId2 = $userId2;
        }

        public function getUserId2() {
            return $this->userId2;
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