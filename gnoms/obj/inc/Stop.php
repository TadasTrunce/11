<?php
namespace Gnoms;
class Stop
{
    private $passengers = [];

    public function busArrive(Bus $bus)
    {
        if (!$bus->freeSeats()) {
            return;
        }
        foreach ($this->passengers as $key => $passenger){
            if ($bus->board($passenger)) {
                unset($this->passengers[$key]);
            }
        }
    }



}