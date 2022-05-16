<?php

declare(strict_types=1);

namespace FizzBuzz;

interface Ruleable
{
    /**
     * We could have different types of parameter, so it's generic
     */
    public function hasFulfilled($param): bool;
    public function getMessage(): string;
}