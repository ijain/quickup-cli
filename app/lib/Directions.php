<?php
/**
 * Class Directions
 *
 * Walk through input and calculate average
 */

namespace App\Lib;

use App\Entity\iDirections;
use PHPUnit\Runner\Exception as PHPUnitException;

class Directions implements iDirections
{
    public $directions = [];

    /**
     * @param array $data
     */
    public function addDirection(array $data)
    {
        if (!empty($data)) {
            next($data);
            $direction = next($data);
        } else {
            throw new PHPUnitException("Undefined key - Start");
        }

        $this->directions[] = $direction;
    }
}