<?php
 
class Greeting{
   function welcome($str){
     echo "Hello, We welcome you $str <br>";
   }
}
  
class Teacher extends Greeting{
       
    
}
  
class Student extends Greeting{
  
    
}
 
$teacher = new Teacher;
$teacher->welcome("Sir");
 
$student =new Student;
$student->welcome("dear");
 
?>