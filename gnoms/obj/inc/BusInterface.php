<?php
namespace Gnoms;
interface BusInterface
{
    const BUS_TYPE = [
        'Ikarus' => 50,
        'Volvo' => 30,
        'MB' => 12,
        'Prius' => 4
    ];

    function getCapacity() : int;
    function freeSeats() : int;
    function isFast() : bool;
    function board(Passenger $passenger) : bool;
    
}