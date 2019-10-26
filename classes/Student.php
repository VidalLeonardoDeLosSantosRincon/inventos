<?php
    class Student extends Person{
        protected $universityID;
        public function __construct($name, $surname, $dateOfBirth, $universityID){
            parent::__construct($name, $surname, $dateOfBirth);
            $this->universityID = $universityID;
        }
               
        public function enrollToCourse(){
            
        }
    }
?>