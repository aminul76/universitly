<?php
/**
 * 
 */
class aminul 
{
  
public $n;
public $d;
 public function day()
 {
   echo "aminul is Working";
 }
 public function night()
 {
   echo "aminul is sleeping";
 }

}
/**
 * 
 */
class routine extends aminul
{
  public function life()
  {
    echo $this->night();
  }
  
}
 $obj=new aminul();
 $obj1=new routine();
 $obj1->life();




 ?>
