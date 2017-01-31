<?php 
/**
 * Class with algorithms to solve and display mathematical sequences.
 * 
 * @category   JST
 * @package    Algorithm
 * @subpackage AlgorithmTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-Algorithm
 * @since      File available since 1.0.0 - Update: 2017-01-30
 */

namespace Josantonius\Algorithm\Tests;

use Josantonius\Algorithm\Algorithm;

/**
 * Tests class for Algorithm library.
 *
 * @since 1.0.0
 */
class AlgorithmTest { 

    /**
     * Show 15 lines of the Look-and-Say sequence starting with 1.
     *
     * @since 1.0.0
     */
    public static function testLookAndSay() {

        Algorithm::lookAndSay();
    }

    /**
     * Customize initial value and lines to show the Look-and-Say sequence.
     *
     * @since 1.0.0
     */
    public static function testLookAndSayCustom() {

        Algorithm::lookAndSay(22, 15);
    }
}