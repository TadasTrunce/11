<?php
class Krepsys
{
    const TALPA = 500;
    private $kiekis = 0;

    public function rinkti(Grybas $grybas)
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->kiekis += $grybas->svoris;
        }
        return ($this->kiekis < self::TALPA);
    }

    public function __get($prop)
    {
        return $this->{$prop};
    }


}