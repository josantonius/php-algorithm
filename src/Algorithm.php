<?php declare(strict_types=1);
/**
 * Class with algorithms to solve and display mathematical sequences.
 * 
 * @category   JST
 * @package    Algorithm
 * @subpackage Algorithm
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-Algorithm
 * @since      File available since 1.0.0 - Update: 2017-01-21
 */

namespace Josantonius\Algorithm;

# use Josantonius\Algorithm\Exception\AlgorithmException;

/**
 * Algorithm handler.
 *
 * @since 1.0.0
 */
class Algorithm { 

    /**
     * The Conway constant is a mathematical constant linked to the growth rate of 
     * the number of numbers in a sequence known as Look-and-Say. In this sequence,
     * each term is obtained by grouping the same numbers as the previous one and
     * reciting them.
     *
     * @since 1.0.0
     *
     * @param string $sequence → initial value to start the sequence
     * @param string $maxLines → maximum number of lines to show the sequence
     *
     * @return string → sequence
     */
    public static function lookAndSay($sequence = 1, int $maxLines = 15) {

        for ($i=0; $i < $maxLines; $i++) { 
            
            print $sequence . "<br>";

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
    }
}