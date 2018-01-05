<?php
/**
 * Class with algorithms to solve and display mathematical sequences.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-Algorithm
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Algorithm
 * @since     1.0.0
 */
namespace Josantonius\Algorithm;

class Algorithm
{
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
     * In this sequence, each term is obtained by grouping the same numbers
     * the previous one and reciting them.
     *
     * @param int $lastSequence → initial value to start the sequence
     * @param int $maxLines     → maximum lines number to show
     *
     * @return string → sequence
     */
    public static function lookAndSay($lastSequence = 1, $maxLines = 15)
    {
        if ($lastSequence < 0 || $maxLines < 0) {
            return false;
        }

        for ($i = 0; $i < $maxLines; $i++) {
            $counter = 1;
            $sequence = str_split($lastSequence);
            $newSecuence = '';

            self::$lookAndSay .= $lastSequence . "\n";

            foreach ($sequence as $key => $value) {
                $index = ($key + 1);
                $nextVal = isset($sequence[$index]) ? $sequence[$index] : 0;
                if ($value === $nextVal) {
                    $counter++;
                    continue;
                }
                $newSecuence .= $counter . $value;
                $counter = 1;
            }

            return static::lookAndSay($newSecuence, ($maxLines - 1));
        }

        return self::$lookAndSay;
    }
}
