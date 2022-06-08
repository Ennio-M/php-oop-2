<?php
    class User{
        protected $name;
        protected $lastname;
        protected $email;
        protected $cart;

        function __construct($_name, $_lastname, $_email, $_cart = []){
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
            $this->cart = $_cart;
        }

        public function getName(){
            return $this->name;
        }
        public function getLastname(){
            return $this->lastname;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getCart(){
            return $this->cart;
        }

        public function setName($_name){
            $this->name = $_name;
        }
        public function setLastname($_lastname){
            $this->lastname = $_lastname;
        }
        public function setEmail($_email){
            $this->email = $_email;
        }
        public function setCart($_cart){
            $this->cart[] = $_cart;
        }
    }
?>