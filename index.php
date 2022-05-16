<?php

require __DIR__ . '/vendor/autoload.php';

const MIN = 1;
const MAX = 100;

$rules = [
    new \FizzBuzz\DivideRule(15, 'FizzBuzz'),
    new \FizzBuzz\DivideRule(3, 'Fizz'),
    new \FizzBuzz\DivideRule(5, 'Buzz'),
];

$elements = \FizzBuzz\NumberElementFactory::build(MIN, MAX, $rules);

$operator = new \FizzBuzz\Operator($elements);
$operator->execute();
