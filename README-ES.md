# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/Algorithm/v/stable)](https://packagist.org/packages/josantonius/Algorithm) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Algorithm/v/unstable)](https://packagist.org/packages/josantonius/Algorithm) [![License](https://poser.pugx.org/josantonius/Algorithm/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/3505aa3d827b48839fd3f6a2166dbbc6)](https://www.codacy.com/app/Josantonius/PHP-Algorithm?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-Algorithm&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Algorithm/downloads)](https://packagist.org/packages/josantonius/Algorithm) [![Travis](https://travis-ci.org/Josantonius/PHP-Algorithm.svg)](https://travis-ci.org/Josantonius/PHP-Algorithm) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Algorithm/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Algorithm)

[English version](README.md)

Clase con algoritmos para resolver y mostrar secuencias matemáticas.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP Algorithm library**, simplemente escribe:

    $ composer require Josantonius/Algorithm

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/Algorithm --prefer-source

También puedes **clonar el repositorio** completo con Git:

	$ git clone https://github.com/Josantonius/PHP-Algorithm.git

O **instalarlo manualmente**:

[Descargar Algorithm.php](https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/src/Algorithm.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/src/Algorithm.php

## Métodos disponibles

### - Imprimir secuencia "Look-and-Say":

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

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/PHP-Algorithm.git
    
    $ cd PHP-Algorithm

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    $ composer phpmd

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [ ] Añadir nueva funcionalidad
- [ ] Mejorar pruebas
- [ ] Mejorar documentación
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas. Ver [phpmd.xml](https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/phpmd.xml) y [.php_cs.dist](https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/.php_cs.dist).

## Contribuir

Si deseas colaborar, puedes echar un vistazo a la lista de
[issues](https://github.com/Josantonius/PHP-Algorithm/issues) o [tareas pendientes](#-tareas-pendientes).

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Ejecuta el comando `composer install` para instalar dependencias.
  Esto también instalará las [dependencias de desarrollo](https://getcomposer.org/doc/03-cli.md#install).
* Ejecuta el comando `composer fix` para estandarizar el código.
* Ejecuta las [pruebas](#tests).
* Crea una nueva rama (**branch**), **commit**, **push** y envíame un
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repositorio

La estructura de archivos de este repositorio se creó con [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2017 - 2018 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).