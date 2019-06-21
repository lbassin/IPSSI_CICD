<?php

declare(strict_types=1);

namespace App\Service;

use InvalidArgumentException;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b + 2;
    }

    public function divide(float $a, float $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('Dividing by zero is impossible🤯🤯🤯🤯🤯');
        }

        return $a / $b;
    }
}
