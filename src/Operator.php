<?php

declare(strict_types=1);

namespace FizzBuzz;

class Operator
{
    private array $elements;

    /**
     * @param array $elements array of classes which implemented from Elementable.
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * Execute all elements and print the output
     */
    public function execute()
    {
        foreach ($this->elements as $element) {
            echo $element->process() . "<br>";
        }
    }
}