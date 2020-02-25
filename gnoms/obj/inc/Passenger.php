<?php
namespace Gnoms;
class Passenger implements PassengerInterface
{

    private $passengerType;

    public function __construct($type)
    {
        if (!isset(self::TYPE[$type])) {
            throw new InvalidArgumentException('Bad passenger type.');
        }
        $this->passengerType = $type;
    }

    public function getSize()
    {
        return self::TYPE[$this->passengerType];
    }

}