<?php

declare(strict_types=1);

namespace FizzBuzz;

class DivideRule implements Ruleable
{
    private $divider;
    private $message;

    /**
     * @param int $divider
     * @param string $message the message when the condition has been met
     */
    public function __construct(int $divider, string $message)
    {
        $this->divider = $divider;
        $this->message = $message;
    }

    /**
     * Check whether the given element fulfills the criteria of the rule
     * @param int $number
     * @return bool
     */
    public function hasFulfilled($number): bool
    {
        return ( fmod($number, $this->divider) == 0 );
    }

    /**
     * Get the rule's message e.g. Fizz, Buzz, etc.
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}