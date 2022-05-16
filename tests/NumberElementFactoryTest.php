<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumberElementFactoryTest extends TestCase
{
    public function test_number_element_creation()
    {
        $rule = new \FizzBuzz\DivideRule(1, 'DivideTo1');
        $elements = \FizzBuzz\NumberElementFactory::build(1, 2, [ $rule ]);
        $element = $elements[0];
        $this->assertEquals($element->process(), 'DivideTo1');
    }
}
