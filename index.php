<?php

use User as GlobalUser;

class User
{
    public $firstname;

    public function __construct($firstname)
    {
        $this->firstname = $firstname;
    }

    public function hello()
    {
        echo 'Hello, ' .$this->firstname;
        return $this;
    }

    public function register()
    {
        echo '>> registered';
        return $this;
    }

    public function mail()
    {
      echo '>> email sent.';
      return $this;
    }
} 

 function test()
    {
      $user1 = new User("Jane");
      $user1->hello()->register()->mail();
    }
       test();
?>