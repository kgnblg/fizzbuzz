<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumberElementTest extends TestCase
{
    public function test_number_element_fits()
    {
        $element = new \FizzBuzz\NumberElement(3);
        $rule = new \FizzBuzz\DivideRule(3, 'Fizz');
        $element->addRule($rule);
        $this->assertEquals($element->process(), 'Fizz');
    }

    public function test_number_element_not_fits()
    {
        $element = new \FizzBuzz\NumberElement(3);
        $rule = new \FizzBuzz\DivideRule(5, 'Buzz');
        $element->addRule($rule);
        $this->assertEquals($element->process(), '3');
    }
}
