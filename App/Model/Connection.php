<?php
    namespace App\Model;

    class Connection {
        private static $instance;

        public static function getConnection () {
            if(!isset(self::$instance)) {
                self::$instance = new \PDO('mysql:host=50.116.112.31;dbname=tourvi45_Twitter', 'tourvi45_joao', '123456');
            }
            return self::$instance;
        }
    }
?>