<?php

class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods 
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

// Objects
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Maça');
$apple->set_color('Vermelho');
$banana->set_name('Banana');
$banana->set_color('Amarelo');


echo "Nome: " . $apple->get_name();
echo PHP_EOL;
echo "Cor: " . $apple->get_color();
echo PHP_EOL;
echo "Nome: " . $banana->get_name();
echo PHP_EOL;
echo "Cor: " . $banana->get_color();
echo PHP_EOL;