<?php

class Animal
{
    public $weight;

    public function eat()
    {
        var_dump('All animals eat');
    }

    public function reproduce()
    {
        var_dump('All animals can reproduce');
    }
}


class Mammal extends Animal
{
    public $heartRate;
    
    public function breathe()
    {
        var_dump('I can breathe because I am a mammal');
    }

}


class Dog extends Mammal
{
    public $color;

    public function bark()
    {
        var_dump("I can bark because I am a " . strtolower(__CLASS__));
    }

    public function chase()
    {
        var_dump("I am chasing a rabbit");
    }

    public function breathe()
    {
        var_dump('I breathe veryyy fast because I am a dog');
    }
}



header('Content-Type:text/plain', true);

$brown = new Dog;
$brown->weight = '15';
$brown->color = 'Brown';
$brown->heartRate = 'Okay';

echo "Weight is " . $brown->weight, PHP_EOL, "Color is " . $brown->color, PHP_EOL, "Heartrate is " . $brown->heartRate;


$brown->bark();
$brown->chase();
$brown->eat();
$brown->reproduce();
$brown->breathe();