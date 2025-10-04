<?php

class User {
    public $first_name;
    public $last_name;

    function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    function __destruct()
    {
        echo "O primeiro nome do usuário é {$this->first_name} e o sobrenome é {$this->last_name}.";
    }
}

$userOne = new User("Lucio", "Azevedo");