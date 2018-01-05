<?php
/**
 * Class with algorithms to solve and display mathematical sequences.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-Algorithm
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Algorithm
 * @since     1.1.3
 */
namespace Josantonius\Algorithm;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for PHP-Algorithm class.
 */
final class AlgorithmTest extends TestCase
{
    /**
     * Algorithm instance.
     *
     * @since 1.1.5
     *
     * @var object
     */
    protected $Algorithm;

    /**
     * Set up.
     *
     * @since 1.1.5
     */
    public function setUp()
    {
        parent::setUp();

        $this->Algorithm = new Algorithm;
    }

    /**
     * Check if it is an instance of Algorithm.
     *
     * @since 1.1.5
     */
    public function testIsInstanceOf()
    {
        $this->assertInstanceOf('Josantonius\Algorithm\Algorithm', $this->Algorithm);
    }

    /**
     * Show 15 lines of the Look-and-Say sequence starting with 1.
     *
     * Only numbers between 1 and 3 must exist.
     */
    public function testLookAndSay()
    {
        $algorithm = $this->Algorithm;

        $str = $algorithm::lookAndSay();

        $this->assertInternalType('string', $str);

        $this->assertTrue(preg_match('/^[1-3\s]+$/', $str) === 1);
    }

    /**
     * Customize initial value and lines to show the Look-and-Say sequence.
     *
     * Only the number 8 and numbers between 1 and 3 must exist.
     */
    public function testLookAndSayCustom()
    {
        $algorithm = $this->Algorithm;

        $str = $algorithm::lookAndSay(8, 15);

        $this->assertInternalType('string', $str);

        $this->assertTrue(preg_match('/^[1-38\s]+$/', $str) === 1);
    }

    /**
     * Failed to use negative values in sequence.
     */
    public function testSequenceError()
    {
        $algorithm = $this->Algorithm;

        $this->assertFalse($algorithm::lookAndSay(-1, 15));
    }

    /**
     * Failed to use negative values in line limits.
     */
    public function testLineLimitsError()
    {
        $algorithm = $this->Algorithm;

        $this->assertFalse($algorithm::lookAndSay(1, -15));
    }
}
