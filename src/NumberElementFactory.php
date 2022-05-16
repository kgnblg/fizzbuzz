<?php

declare(strict_types=1);

namespace FizzBuzz;

class NumberElementFactory
{
    /**
     * Create multiple NumberElement instances with the given ruleset and min/max data
     * @param int $min
     * @param int $max
     * @param array $ruleset
     * @return array
     */
    public static function build(int $min, int $max, array $ruleset): array
    {
        $elements = [];

        for ($i = $min; $i < $max; $i++) {
            $element = new NumberElement($i);
            $element->addRules($ruleset);
            $elements[] = $element;
        }

        return $elements;
    }
}
