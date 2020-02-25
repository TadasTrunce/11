<?php
namespace Gnoms;
interface PassengerInterface
{
    const TYPE = [
        'gnom' => 1,
        'elf' => 3,
        'goblin' => 7
    ];

    function getSize() : int;
}