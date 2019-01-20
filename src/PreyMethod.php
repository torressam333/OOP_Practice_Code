<?php


abstract class PreyMethod
{
    public function chasedBy(Predator $predator)
    {
        var_dump('Please help, I am being chased by a '.get_class($predator));
    }

    public function huntedBy(Predator $predator)
    {
        var_dump(get_class(new static()).' has been hunted by '.get_class($predator));
    }
}
