<?php
    require_once("classes/Person.php");
    require_once("classes/Student.php"); 
    
    $luis = new Person("Luis","Rodriguez","2019-08-22");
    $vidal = new Student("Vidal","De Los Santos","2019-06-18","20163762");
    echo var_dump($luis);
    echo var_dump($vidal);
?>