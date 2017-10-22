# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/Algorithm/v/stable)](https://packagist.org/packages/josantonius/Algorithm) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Algorithm/v/unstable)](https://packagist.org/packages/josantonius/Algorithm) [![License](https://poser.pugx.org/josantonius/Algorithm/license)](LICENSE) [![Codacy Badge](https://www.codacy.com/project/badge/0c4e0d2297414c09949f369226a6ba80)](https://www.codacy.com/app/Josantonius/PHP-Algorithm) [![Total Downloads](https://poser.pugx.org/josantonius/Algorithm/downloads)](https://packagist.org/packages/josantonius/Algorithm) [![Travis](https://travis-ci.org/Josantonius/PHP-Algorithm.svg)](https://travis-ci.org/Josantonius/PHP-Algorithm) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Algorithm/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Algorithm)

[Versión en español](README-ES.md)

Class with algorithms to solve and display mathematical sequences.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Requirements

This class is supported by `PHP versions 5.6` or higher and is compatible with `HHVM versions 3.0` or higher.

### Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install `PHP Algorithm class`, simply:

    $ composer require Josantonius/Algorithm

The previous command will only install the necessary files, if you prefer to download the entire source code you can use:

    $ composer require Josantonius/Algorithm --prefer-source

You can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-Algorithm.git

Or install it manually:

**-** Download [Algorithm.php](https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/src/Algorithm.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/src/Algorithm.php

### Quick Start and Examples

To use this class with `Composer`:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```

Or If you installed it `manually`, use it:

```php
require_once __DIR__ . '/Algorithm.php';

use Josantonius\Algorithm\Algorithm;
```

### Available Methods

Available methods in this class:

`lookAndSay() - Print "Look-and-Say" sequence`

```php
Algorithm::lookAndSay($lastSequence, $maxLines);
```

| Atttribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $lastSequence | Initial value to start the sequence | int | No | 1 |
| $maxLines | Maximum lines number to show | int | No | 15 |

**# Return** (string) → Sequence.

### Usage

Example of use for this class:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;

echo Algorithm::lookAndSay();

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

echo Algorithm::lookAndSay(22, 5);

/*
22
22
22
22
22
*/
```

### Tests 

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-Algorithm.git
    
    $ cd PHP-Algorithm

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run PSR2 code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

### ☑ TODO

- [x] Create tests
- [x] Improve documentation

### Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).