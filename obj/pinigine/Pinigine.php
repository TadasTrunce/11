<?php

class Pinigine
{
    const METALAS = 2;
    private $popieriniaiPinigai = [], $metaliniaiPinigai = [];

    public function ideti($pinigas)
    {
        if (self::METALAS < $pinigas) {
            $this->popieriniaiPinigai[] = $pinigas;
        }
        else {
            $this->metaliniaiPinigai[] = $pinigas;
        }
    }

    public function skaiciuoti()
    {
        return array_sum($this->popieriniaiPinigai) + array_sum($this->metaliniaiPinigai);
    }

    public function skaiciuoti4()
    {
        $rez = [];

        $rez['monetos'] = count($this->metaliniaiPinigai);
        $rez['monetu_suma'] = array_sum($this->metaliniaiPinigai);

        $rez['banknotai'] = count($this->popieriniaiPinigai);
        $rez['banknotu_suma'] = array_sum($this->popieriniaiPinigai);

        return $rez;


    }
}