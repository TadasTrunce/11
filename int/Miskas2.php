<?php
namespace Miskai;
class Miskas2 extends Miskas1 implements Miskas
{

    public function zeminiai_gyvunai()
    {
        return rand(5,10);
    }


    public function visi_gyvunai()
    {
        return $this->zeminiai_gyvunai() + $this->oro_gyvunai();
    }

    public function oro_gyvunai()
    {
        return rand(12, 34);
    }
}