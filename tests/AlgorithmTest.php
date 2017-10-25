<?php
/**
 * Class with algorithms to solve and display mathematical sequences.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 (c) Josantonius - PHP-Algorithm
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Algorithm
 * @since     1.0.0
 **/

namespace Josantonius\Algorithm;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Algorithm library.
 *
 * @since 1.1.3
 */
final class AlgorithmTest extends TestCase
{
    /**
     * Setup.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Show 15 lines of the Look-and-Say sequence starting with 1.
     *
     * @since 1.1.3
     */
    public function testLookAndSay()
    {
        $str = Algorithm::lookAndSay();

        $this->assertInternalType('string', $str);

        // Only numbers between 1 and 3 must exist

        $this->assertTrue(preg_match('/^[1-3\s]+$/', $str) === 1);
    }

    /**
     * Customize initial value and lines to show the Look-and-Say sequence.
     *
     * @since 1.1.3
     */
    public function testLookAndSayCustom()
    {
        $str = Algorithm::lookAndSay(8, 15);

        $this->assertInternalType('string', $str);

        // Only the number 8 and numbers between 1 and 3 must exist

        $this->assertTrue(preg_match('/^[1-38\s]+$/', $str) === 1);
    }

    /**
     * Failed to use negative values in sequence.
     *
     * @since 1.1.3
     */
    public function testSequenceError()
    {
        $this->assertFalse(Algorithm::lookAndSay(-1, 15));
    }

    /**
     * Failed to use negative values in line limits.
     *
     * @since 1.1.3
     */
    public function testLineLimitsError()
    {
        $this->assertFalse(Algorithm::lookAndSay(1, -15));
    }
}
