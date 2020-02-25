<?php
namespace Gnoms;

class Bus implements BusInterface
{

    private $busType, $busFastSpeed, $seats = [];

    public function __construct($type)
    {
        if (!isset(self::BUS_TYPE[$type])) {
            throw new \InvalidArgumentException('Bad bus type.');
        }
        $this->busType = $type;
    }

    public function setSpeed(bool $fast)
    {
        $this->busFastSpeed = $fast;
    }

    public function board(Passenger $passenger) : bool
    {
        $free = $this->freeSeats();
        if (!$free) {
            return false;
        }
        if ($free >= $passenger->getSize()) {
            $this->seats[] = $passenger;
            return true;
        }
        return false;
    }

    public function getCapacity() : int
    {
        return self::BUS_TYPE[$this->busType];
    }
    
    public function freeSeats() : int
    {
        $sum = 0;
        foreach ($this->seats as $passenger) {
            $sum += $passenger->getSize();
        }
        return $this->getCapacity() - $sum;
    }

    public function isFast() : bool
    {
        return $this->busFastSpeed;
    }



}