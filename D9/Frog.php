<?php
require_once 'animal.php';
class Frog extends Animal
{
   // pewarisan fungsi
   function __construct($name)
   {
      parent::__construct($name);
      $this->legs = 4;
   }
   // fungsi baru
   function jump()
   {
      echo 'hop hop';
   }
}
