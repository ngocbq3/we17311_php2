<?php

class Animal
{
    protected $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function info()
    {
        echo "{$this->name} có màu lông là {$this->color} <br />";
    }
}

class Dog extends Animal
{
    public function say()
    {
        echo "{$this->name} đang nói Gâu gâu ...<br />";
    }
}

class Cat extends Animal
{
    public function say()
    {
        echo "{$this->name} đang nói Meo Meo ...<br />";
    }
}

$animal = new Animal("Hổ", "Vàng");
// $animal->name = "Cọp";

$cauvang = new Dog("Cậu vàng", "Vàng");
$tom = new Cat("Tom", "Tam thể");

$cauvang->say();
$tom->say();
$cauvang->info();
