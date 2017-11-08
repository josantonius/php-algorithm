# CHANGELOG

## 1.1.5 - 2017-11-08

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## 1.1.4 - 2017-10-19

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Changed `Josantonius\Algorithm\Test\AlgorithmTest` class to `Josantonius\Algorithm\AlgorithmTest` class.

* Added `Algorithm/phpcs.ruleset.xml` file.

* Deleted `Algorithm/src/bootstrap.php` file.

* Deleted `Algorithm/tests/bootstrap.php` file.

* Deleted `Algorithm/vendor` folder.

## 1.1.3 - 2017-09-10

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.
 
* Added `Algorithm/src/bootstrap.php` file

* Added `Algorithm/tests/bootstrap.php` file.

* Added `Algorithm/phpunit.xml.dist` file.
* Added `Algorithm/_config.yml` file.
* Added `Algorithm/.travis.yml` file.

* Deleted `Josantonius\Algorithm\Tests\AlgorithmTest` class.
* Deleted `Josantonius\Algorithm\Tests\AlgorithmTest::testLookAndSay()` method.
* Deleted `Josantonius\Algorithm\Tests\AlgorithmTest::testLookAndSayCustom()` method.

* Added `Josantonius\Algorithm\Test\AlgorithmTest` class.
* Added `Josantonius\Algorithm\Test\AlgorithmTest::testLookAndSay()` method.
* Added `Josantonius\Algorithm\Test\AlgorithmTest::testLookAndSayCustom()` method.
* Added `Josantonius\Algorithm\Test\AlgorithmTest::testSequenceError()` method.
* Added `Josantonius\Algorithm\Test\AlgorithmTest::testLineLimitsError()` method.

## 1.1.2 - 2017-07-15

* Deleted `Josantonius\Algorithm\Exception\AlgorithmException` abstract class.
* Deleted `Josantonius\Algorithm\Exception\AlgorithmException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-21

* Added `Josantonius\Algorithm\Algorithm` class.
* Added `Josantonius\Algorithm\Algorithm::lookAndSay()` method.

## 1.0.0 - 2017-01-21

* Added `Josantonius\Algorithm\Exception\AlgorithmException` abstract class.
* Added `Josantonius\Algorithm\Exception\AlgorithmException->__construct()` method.

## 1.0.0 - 2017-01-21
* Added `Josantonius\Algorithm\Tests\AlgorithmTest` class.
* Added `Josantonius\Algorithm\Tests\AlgorithmTest::testLookAndSay()` method.
* Added `Josantonius\Algorithm\Tests\AlgorithmTest::testLookAndSayCustom()` method.
