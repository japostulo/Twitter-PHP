<?php
    namespace App\Message;

    class Message { 
        private $id, $message, $userId, $chatId, $createAt, $updateAt;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setMessage($message) {
            $this->message = $message;
        }

        public function getMessage() {
            return $this->message;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
        }

        public function getUserId() {
            return $this->userId;
        }
        
        public function setChatId($chatId) {
            $this->chatId = $chatId;
        }

        public function getChatId() {
            return $this->chatId;
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