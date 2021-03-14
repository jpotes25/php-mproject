<?php

namespace App;

class User
{

   //Atributes 

   private $id; 
   private $userName;
   private $email;
   private $country;

   //Construct

   public function __construct($userName, $email, $country)
   {
       $this->userName = $userName;
       $this->email = $email;
       $this->country = $country;
   }

   //Getters & Setters

   public function getId()
   {
       return $this->id;
   }

   public function setId($id)
   {
       $this->id = $id;
   }

   public function getUserName()
   {
       return $this->userName;
   }

   public function setUserName($userName)
   {
       $this->userName = $userName;
   }

   public function getEmail()
   {
       return $this->Email;
   }

   public function setEmail($email)
   {
       $this->email = $email;
   }

   public function getCountry()
   {
       return $this->country;
   }

   public function setCountry($country)
   {
       $this->country = $country;
   }

   // Methods

}

?>