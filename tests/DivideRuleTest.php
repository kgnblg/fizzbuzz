<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DivideRuleTest extends TestCase
{
    public function test_divide_rule_3()
    {
        $rule = new \FizzBuzz\DivideRule(3, 'Fizz');
        $this->assertTrue($rule->hasFulfilled(6));
        $this->assertEquals($rule->getMessage(), 'Fizz');
    }

    public function test_divide_rule_5()
    {
        $rule = new \FizzBuzz\DivideRule(5, 'Buzz');
        $this->assertTrue($rule->hasFulfilled(10));
        $this->assertEquals($rule->getMessage(), 'Buzz');
    }

    public function test_divide_rule_15()
    {
        $rule = new \FizzBuzz\DivideRule(15, 'FizzBuzz');
        $this->assertTrue($rule->hasFulfilled(30));
        $this->assertEquals($rule->getMessage(), 'FizzBuzz');
    }
}
