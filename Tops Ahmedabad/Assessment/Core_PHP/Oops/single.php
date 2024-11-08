<?php
 
//Parent Class
class Person {
     
   protected $name;
    
   function set_name($name){
      $this->name = $name;
    }
}
 
//child class inheriting Person class
class Student extends Person {
 
  function say_hello(){
     echo "Hello $this->name, How is your study going on?";
  }
}
 
$student1 = new Student;
$student1->set_name("Rahul");
$student1->say_hello();
 
?>