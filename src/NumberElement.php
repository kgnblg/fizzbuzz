<?php

declare(strict_types=1);

namespace FizzBuzz;

class NumberElement implements Elementable
{
    private $number;
    private $rules = [];

    /**
     * Each element contains a number between min and max.
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * Bind a single rule to the element
     */
    public function addRule(Ruleable $rule)
    {
        $this->rules[] = $rule;
    }

    /**
     * Add multiple rules to the element's ruleset
     */
    public function addRules(array $rules)
    {
        $this->rules = array_merge($this->rules, $rules);
    }

    /**
     * Check rules and print if it fits
     * @return string
     */
    public function process(): string
    {
        foreach ($this->rules as $rule) {
            if ($rule->hasFulfilled($this->number)) {
                return $rule->getMessage();
            }
        }

        return strval($this->number);
    }
}