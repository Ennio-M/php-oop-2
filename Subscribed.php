<?php
    require_once __DIR__.'/User.php';

    class Subscribed extends User{
        protected $username;
        protected $discount;

        function __construct($_name, $_lastname, $_email, $_cart = [], $_username, $discount = 20){
            parent::__construct($_name, $_lastname, $_email, $_cart = []);
            $this->username = $_username;
            $this->discount = $_discount;
        }

        public function getUsername(){
            return $this->username;
        }
        public function setUsername($_username){
            $this->username = $_username;
        }
    }
?>