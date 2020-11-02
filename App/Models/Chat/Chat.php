<?php 
    namespace App\Chat;

    class Chat {

        private $id;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }
        
    }
?>
