<?php

class Stikline
{
    private $talpa, $ipilta;

    public function __construct($talpa)
    {
        $this->talpa = $talpa;
    }

    public function ipilti($kiekis)
    {
        if ($kiekis > $this->talpa) {
            $this->ipilta = $this->talpa;
        }
        else {
            $this->ipilta = $kiekis;
        }
        return $this;
    }

    public function ispilti()
    {
        $t = $this->ipilta;
        $this->ipilta = 0;
        return $t;
    }
}