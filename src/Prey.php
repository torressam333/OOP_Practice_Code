<?php

interface Prey
{
    public function chasedBy(Predator $predator);

    public function huntedBy(Predator $predator);
}