<?php

class student 
{
public $id;


 public function studentinfo()
 {
 	echo "studentName=Aminul islam"."<br>";
 	echo "GPA=3.50"."<br>";
 }

 public function registetionDate()
 {
 	echo "RegistetionDate=8-11-2019"."<br>";

 }
 public function attendence($id)
 {
 	echo "Attendence=95%".$id;
 }
 public function addsub()
 {
 	echo "Addsub=System analysis" ."<br>";
 }

}
$obj=new student();
$obj->studentinfo();
$obj->registetionDate();
$obj->attendence(id);
$obj->addsub();
?>