<?php

class Warior extends Personnage
{
    public function __construct()
    {
        $this->setHp(200);
        $this->setForce(10);
    }
}