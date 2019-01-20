<?php

interface Predator
{
    public function chase(Prey $prey);

    public function hunt(Prey $prey);
}