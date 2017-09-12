# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/algorithm/v/stable)](https://packagist.org/packages/josantonius/algorithm) [![Total Downloads](https://poser.pugx.org/josantonius/algorithm/downloads)](https://packagist.org/packages/josantonius/algorithm) [![Latest Unstable Version](https://poser.pugx.org/josantonius/algorithm/v/unstable)](https://packagist.org/packages/josantonius/algorithm) [![License](https://poser.pugx.org/josantonius/algorithm/license)](https://packagist.org/packages/josantonius/algorithm) [![Travis](https://travis-ci.org/Josantonius/PHP-Algorithm.svg)](https://github.com/Josantonius/PHP-Algorithm)


[Versión en español](README-ES.md)

Class with algorithms to solve and display mathematical sequences.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Algorithm class, simply:

    $ composer require Josantonius/Algorithm

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/Algorithm --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-Algorithm.git

### Requirements

This class is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```
### Available Methods

Available methods in this class:

```php
Algorithm::lookAndSay();
```
### Usage

Example of use for this class:

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

To run [tests](tests/Algorithm) simply:

    $ git clone https://github.com/Josantonius/PHP-Algorithm.git
    
    $ cd PHP-Algorithm

    $ phpunit

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