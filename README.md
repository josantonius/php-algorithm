# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/Algorithm/v/stable)](https://packagist.org/packages/josantonius/algorithm)
[![License](https://poser.pugx.org/josantonius/algorithm/license)](LICENSE)
[![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/)
[![CodeCov](https://codecov.io/gh/josantonius/php-algorithm/branch/master/graph/badge.svg)](https://codecov.io/gh/josantonius/php-algorithm)

**Translations**: [Español](.github/lang/es-ES/README.md)

Class with algorithms to solve and display mathematical sequences.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Changelog](#changelog)
- [Contribution](#contribution)
- [Sponsor](#sponsor)
- [License](#license)

---

## Requirements

This class is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher...

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Algorithm class**, simply:

```console
composer require josantonius/algorithm
```

The previous command will only install the necessary files,
if you prefer to **download the entire source code** you can use:

```console
composer require josantonius/algorithm --prefer-source
```

You can also **clone the complete repository** with Git:

```console
git clone https://github.com/josantonius/php-algorithm.git
```

Or **install it manually**:

[Download Algorithm.php](https://raw.githubusercontent.com/josantonius/php-algorithm/master/src/Algorithm.php):

```console
wget https://raw.githubusercontent.com/josantonius/php-algorithm/master/src/Algorithm.php
```

## Available Methods

Available methods in this class:

### Print "Look-and-Say" sequence

```php
Algorithm::lookAndSay($lastSequence, $maxLines);
```

| Attribute     | Description                         | Type | Required | Default |
| ------------- | ----------------------------------- | ---- | -------- | ------- |
| $lastSequence | Initial value to start the sequence | int  | No       | 1       |
| $maxLines     | Maximum lines number to show        | int  | No       | 15      |

**# Return** (string) → Sequence.

## Quick Start

To use this class with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/Algorithm.php';

use Josantonius\Algorithm\Algorithm;
```

## Usage

Example of use for this class:

```php
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
```

```php
echo Algorithm::lookAndSay(22, 5);

/*
22
22
22
22
22
*/
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

```console
git clone https://github.com/josantonius/php-algorithm.git
```

```console
cd php-algorithm
```

```console
composer install
```

Run unit tests with [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests
with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

```console
composer phpmd
```

Run all previous tests:

```console
composer tests
```

## Changelog

Detailed changes for each release are documented in the
[release notes](https://github.com/josantonius/php-algorithm/releases).

## Contribution

Please make sure to read the [Contributing Guide](.github/CONTRIBUTING.md),
before making a [pull request](.github/CONTRIBUTING.md#pull-requests),
start a [discussion](.github/CONTRIBUTING.md#discussions) or
report a [issue](.github/CONTRIBUTING.md#issues).

Thanks to all [contributors](https://github.com/josantonius/php-algorithm/graphs/contributors) to this project! :heart:

## Sponsor

If you found this interesting, [you can become my sponsor!](https://github.com/josantonius#sponsor) :blush:

## License

This project is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
