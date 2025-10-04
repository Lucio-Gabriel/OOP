<?php

class User {
    public $first_name;
    public $last_name;

    function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    function get_first_name()
    {
        return $this->first_name;
    }

    function get_last_name()
    {
        return $this->last_name;
    }
}

$userOne = new User("Lucio", "Azevedo");
echo $userOne->get_first_name();
echo $userOne->get_last_name();