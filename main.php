<?php 

class User //Main class for Users.Contains data.
{
    public $user_id;
    public $username;
    protected $password;
    public $user_email;
    public $user_landline;
    public $user_mobile;

    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
    }
}

class Admin extends User //Class for Admin type users.
{
    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
    }
}

class Vet extends User //Class for Vet type users.
{
    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
    }
}

class Trainer extends User //Class for Trainer type users.
{
    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
    }
}

class Animal_Rescue extends User //Class for Animal_Rescue type users.
{
    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
    }
}

class s_user extends User //Class for simple user type users.
{
    protected $user_name;
    protected $user_lname;
    private $available_host;

    protected function __construct($user_id, $username, $password, $user_email, $user_landline, $user_mobile, $user_name, $user_lname, $available_host) 
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_landline = $user_landline;
        $this->user_mobile = $user_mobile;
        $this->user_name = $user_name;
        $this->user_lname = $user_lname;
        $this->available_host = $available_host;
    }
}

class Animal
{
    public $animal_id;
    public $race;
    public $sex;
    public $size;
    public $health_p;
    public $location;

    protected function __construct($animal_id, $race, $sex, $size, $health_p, $location) 
    {
        $this->animal_id = $animal_id;
        $this->race = $race;
        $this->sex = $sex;
        $this->size = $size;
        $this->health_p = $health_p;
        $this->location = $location;
    }
}

class Form
{
    
}




?>