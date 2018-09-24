<?php

namespace LoickVirot\Classes;

class IsTrue
{
    const TEMPLATE = "true";

    /**
     * Check value of a boolean variable.
     * @param $variable
     * @param int $index
     * @return bool
     */
    static function test($variable, $index = 0) {
        // Convert variable to string
        if (is_bool($variable)) {
            $variable = $variable === true ? 'true' : 'false';
        }

        $variable = (string) $variable;
        
        // Is current char is equals to current char in template
        if (strtolower($variable[$index]) !== self::TEMPLATE[$index]) {
            return false;
        }
        // Is previous char is equals to previous char in template (just to be sure)
        if ($index > 0) {
            if (strtolower($variable[$index - 1]) !== self::TEMPLATE[$index - 1]) {
                return false;
            }
        }
        // Is next char is equals to next char in template (just to be sure)
        if ($index < strlen(self::TEMPLATE) - 1) {
            if (strtolower($variable[$index + 1]) !== self::TEMPLATE[$index + 1]) {
                return false;
            }
        }
        // Is it's the end of template AND end of variable
        if ($index === strlen(self::TEMPLATE) - 1) {
            if (array_key_exists($index + 1, str_split($variable))) {
                return false;
            } else {
                return true;
            }
        }
        return self::test($variable, ++$index);
    }   
}