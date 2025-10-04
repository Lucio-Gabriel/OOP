<?php

class Customer {
    public $name;
    public $email;
    
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function emailMessage() 
    {
        echo "Olá {$this->name} é um prazer(a) ter você como cliente, você afirma que seu E-mail é: {$this->email} ?";
    }
}

class Nike extends Customer{
    public function confirmedEmail() 
    {
        echo "Recebemos a sua confirmação {$this->name}, Muito obrigado por fazer parte da nossa historia!";
    }
}

$customer = new Nike("Lucio Azevedo", "luciogabrieldeazevedo@gmail.com");
$customer->emailMessage();
echo PHP_EOL;
$customer->confirmedEmail();
echo PHP_EOL;
