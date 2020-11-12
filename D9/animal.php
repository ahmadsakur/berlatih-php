<?php
class Animal
{
   // properti
   public $name;
   public $legs;
   public $cold_blooded;


   // Constructor
   function __construct($name)
   {
      $this->name = $name;
      $this->legs = 2;
      $this->cold_blooded = "false";
   }


   // Selektor
   function get_name()
   {
      return $this->name;
   }
   function get_legs()
   {
      return $this->legs;
   }
   function get_cold_blooded()
   {
      return $this->cold_blooded;
   }
}
