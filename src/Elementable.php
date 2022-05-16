<?php

declare(strict_types=1);

namespace FizzBuzz;

interface Elementable
{
    public function addRule(Ruleable $rule);
    public function addRules(array $rules);
    public function process();
}