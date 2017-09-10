<?php
/**
 * Class with algorithms to solve and display mathematical sequences.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Algorithm
 * @since      1.0.0
 */

namespace Josantonius\Algorithm;

/**
 * Algorithm handler.
 *
 * @since 1.0.0
 */
class Algorithm { 

    /**
     * Look-and-Say sequence.
     *
     * @since 1.1.3
     *
     * @var array
     */
    public static $lookAndSay;

    /**
     * The Conway constant is a mathematical constant linked to the growth
     * rate of the number of numbers in a sequence known as Look-and-Say. 
     * In this sequence, each term is obtained by grouping the same numbers as
     * the previous one and reciting them.
     *
     * @since 1.0.0
     *
     * @param string $sequence → initial value to start the sequence
     * @param string $maxLines → maximum number of lines to show the sequence
     *
     * @return string → sequence
     */
    public static function lookAndSay($sequence = 1, $maxLines = 15) {

        if ($sequence < 0 || $maxLines < 0) { return false; }

        for ($i=0; $i < $maxLines; $i++) { 
            
            self::$lookAndSay .= $sequence . "\n";

            $counter  = 1;
            $sequence = str_split($sequence);

            $newSecuence = '';

            foreach ($sequence as $key => $value) {

                $nextValue = $sequence[$key + 1] ?? null;

                if ($value === $nextValue) {

                    $counter++;
                    continue;
                } 

                $newSecuence .= $counter . $value;

                $counter = 1;
            }

            return static::lookAndSay($newSecuence, $maxLines - 1);
        }

        return self::$lookAndSay;
    }
}
