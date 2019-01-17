<?php

class Animal
{
    public $weight;

    public function eat()
    {
        var_dump('All animals can eat');
    }

    public function reproduce()
    {
        var_dump('All animals are able to reproduce');
    }
}

class Mammal extends Animal
{
    public $hearRate;

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
        var_dump("BARK BARK I am a " .  __CLASS__);
    }

    public function chase()
    {
        var_dump('I am chasing a rabbit');
    }

    public function breathe()
    {
        var_dump('I am a breathing Dog who breathes fast.');
    }
}

header('Content-Type:text/plain', true);

$brown = new Dog;
$brown->weight = 7.3. " lbs";
$brown->color = 'Brown';
$brown->heartRate = 'normal';

echo 'Weight ' . $brown->weight, PHP_EOL, 'Color ' . $brown->color, PHP_EOL, 'Heart Rate ' . $brown->heartRate, PHP_EOL;

$brown->bark();

$brown->chase();

$brown->eat();

$brown->reproduce();

$brown->breathe();

