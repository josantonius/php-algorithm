# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/Algorithm/v/stable)](https://packagist.org/packages/josantonius/algorithm)
[![License](https://poser.pugx.org/josantonius/algorithm/license)](LICENSE)
[![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/)
[![CodeCov](https://codecov.io/gh/josantonius/php-algorithm/branch/master/graph/badge.svg)](https://codecov.io/gh/josantonius/php-algorithm)

**Traducciones**: [English](/README.md)

Clase con algoritmos para resolver y mostrar secuencias matemáticas.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Registro de Cambios](#registro-de-cambios)
- [Contribuir](#contribuir)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores
y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP Algorithm library**, simplemente escribe:

```console
composer require josantonius/algorithm
```

El comando anterior sólo instalará los archivos necesarios, 
si prefieres **descargar todo el código fuente** puedes utilizar:

```console
composer require josantonius/algorithm --prefer-source
```

También puedes **clonar el repositorio** completo con Git:

```console
git clone https://github.com/josantonius/php-algorithm.git
```

O **instalarlo manualmente**:

[Descargar Algorithm.php](https://raw.githubusercontent.com/josantonius/php-algorithm/master/src/Algorithm.php):

```console
wget https://raw.githubusercontent.com/josantonius/php-algorithm/master/src/Algorithm.php
```

## Métodos disponibles

### - Imprimir secuencia "Look-and-Say"

```php
Algorithm::lookAndSay($lastSequence, $maxLines);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $lastSequence | Valor inicial para iniciar la secuencia | int | No | 1 |
| $maxLines | Número máximo de líneas a mostrar | int | No | 15 |

**# Return** (string) → Secuencia.

## Cómo empezar

Para utilizar esta clase con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/Algorithm.php';

use Josantonius\Algorithm\Algorithm;
```

## Uso

Ejemplo de uso para esta clase:

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

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/)
y seguir los siguientes pasos:

```console
git clone https://github.com/josantonius/php-algorithm.git
```

```console
cd php-algorithm
```

```console
composer install
```

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/)
con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

```console
composer phpmd
```

Ejecutar todas las pruebas anteriores:

```console
composer tests
```

## Registro de Cambios

Los cambios detallados de cada versión se documentan en las
[notas de la misma](https://github.com/josantonius/php-algorithm/releases).

## Contribuir

Por favor, asegúrate de leer la [Guía de Contribución](CONTRIBUTING.md) antes de hacer una
[solicitud de extracción (pull request)](CONTRIBUTING.md#solicitudes-de-extracción-pull-requests),
comenzar una [discusión (discussions)](CONTRIBUTING.md#discusiones-discussions)
o reportar un [problema (issue)](CONTRIBUTING.md#problemas-issues).

¡Gracias por [colaborar](https://github.com/josantonius/php-algorithm/graphs/contributors) con este proyecto! :heart:

## Patrocinar

Si este proyecto te pareció interesante,
[¡puedes patrocinarme!](https://github.com/josantonius/lang/es-ES/README.md#patrocinar) :blush:

## Licencia

Este proyecto tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
