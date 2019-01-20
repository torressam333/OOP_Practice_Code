<?php

class Lion extends PreyMethod implements Predator
{
    public function chase(Prey $prey)
    {
        var_dump('I am chasing a '.get_class($prey));
    }

    public function hunt(Prey $prey)
    {
        var_dump('I am hunting a '.get_class($prey));
    }
}
