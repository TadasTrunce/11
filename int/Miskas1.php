<?php
namespace Miskai;
class Miskas1
{
    public function zeminiai_gyvunai()
    {
        return rand(5,10);
    }


    public function visi_gyvunai()
    {
        return $this->zeminiai_gyvunai() + $this->oro_gyvunai();
    }

    // abstract public function oro_gyvunai();
}