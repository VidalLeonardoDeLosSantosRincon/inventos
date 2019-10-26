<?php 
    class Person{
        protected $name;
        protected $surname;
        protected $dateOfBirth;

        public function __construct($name, $surname, $dateOfBirth){
            $this->name = $name;
            $this->surname = $surname;
            $this->dateOfBirth = $dateOfBirth;
        }

        public function walk(){

        }

        public function login(){

        }
    }

?>