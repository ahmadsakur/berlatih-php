<?php
require_once 'animal.php';
class Ape extends Animal
{
   //pewarisan fungsi
   function __construct($name)
   {
      parent::__construct($name);
   }
   // fungsi baru
   function yell()
   {
      echo 'Auooo';
   }
}
