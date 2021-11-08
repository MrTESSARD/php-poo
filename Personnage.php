<?php

abstract class Personnage
{
    private $pseudo;
    private $lvl;
    private $xp;
    private $hp;
    private $force;

    public function __construct($pseudo)
    {
        $this->setPseudo($pseudo);
        $this->setLvl(1);
        $this->setXp(0);
    }

    public function setForce(int $force){
        $this->force =  $force;
    }

    public function getForce(){
        return $this->force;
    }

    public function setHp(int $hp){
        $this->hp = $hp;
    }

    public function getHp(){
        return $this->hp;
    }

    public function setLvl(int $lvl)
    {
        $this->lvl = $lvl;
    }
    public function setXp(int $xp)
    {
        $this->xp = $xp;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getXp()
    {
        return $this->xp;
    }
    public function getLvl()
    {
        return $this->lvl;
    }
    public function increaseXp()
    {
        $increaseValue = $this->xp + 20;
        if ($increaseValue >= 100) {
            $this->xp = $increaseValue - 100;
            $this->lvl += 1;
        } else {
            $this->xp = $increaseValue;
        }
    }
}