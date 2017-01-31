# PHP Algorithm library

[![Latest Stable Version](https://poser.pugx.org/josantonius/algorithm/v/stable)](https://packagist.org/packages/josantonius/algorithm) [![Total Downloads](https://poser.pugx.org/josantonius/algorithm/downloads)](https://packagist.org/packages/josantonius/algorithm) [![Latest Unstable Version](https://poser.pugx.org/josantonius/algorithm/v/unstable)](https://packagist.org/packages/josantonius/algorithm) [![License](https://poser.pugx.org/josantonius/algorithm/license)](https://packagist.org/packages/josantonius/algorithm)

[Spanish version](README-ES.md)

Class with algorithms to solve and display mathematical sequences.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Algorithm library, simply:

    $ composer require Josantonius/Algorithm

### Requirements

This library is supported by PHP versions 7.0 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```
### Available Methods

Available methods in this library:

```php
Algorithm::lookAndSay();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;

Algorithm::lookAndSay();

/*
1
11
21
1211
111221
312211
13112221
1113213211
31131211131221
13211311123113112211
11131221133112132113212221
3113112221232112111312211312113211
1321132132111213122112311311222113111221131221
11131221131211131231121113112221121321132132211331222113112211
311311222113111231131112132112311321322112111312211312111322212311322113212221
*/

Algorithm::lookAndSay(22, 5);

/*
22
22
22
22
22
*/
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Algorithm\\Tests\\', __DIR__ . '/vendor/josantonius/algorithm/tests');

use Josantonius\Algorithm\Tests\AlgorithmTest;

```
Available test methods in this library:

```php
AlgorithmTest::testLookAndSay();
AlgorithmTest::testLookAndSayCustom();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.