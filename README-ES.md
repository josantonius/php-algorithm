# PHP Algorithm class

[![Latest Stable Version](https://poser.pugx.org/josantonius/algorithm/v/stable)](https://packagist.org/packages/josantonius/algorithm) [![Total Downloads](https://poser.pugx.org/josantonius/algorithm/downloads)](https://packagist.org/packages/josantonius/algorithm) [![Latest Unstable Version](https://poser.pugx.org/josantonius/algorithm/v/unstable)](https://packagist.org/packages/josantonius/algorithm) [![License](https://poser.pugx.org/josantonius/algorithm/license)](https://packagist.org/packages/josantonius/algorithm) [![Travis](https://travis-ci.org/Josantonius/PHP-Algorithm.svg)](https://travis-ci.org/Josantonius/PHP-Algorithm)


[English version](README.md)

Clase con algoritmos para resolver y mostrar secuencias matemáticas.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP Algorithm library, simplemente escribe:

    $ composer require Josantonius/Algorithm

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    $ composer require Josantonius/Algorithm --prefer-source

También puedes clonar el repositorio completo con Git:

	$ git clone https://github.com/Josantonius/PHP-Algorithm.git

### Requisitos

Esta clase es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta clase, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Algorithm\Algorithm;
```
### Métodos disponibles

Métodos disponibles en esta clase:

```php
Algorithm::lookAndSay($lastSequence, $maxLines);
```

Print `Look-and-Say` sequence.

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $lastSequence | Valor inicial para iniciar la secuencia | int | No | 1 |
| $maxLines | Número máximo de líneas a mostrar | int | No | 15 |

**# Return** (string) → Secuencia.

### Uso

Ejemplo de uso para esta clase:

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

Para ejecutar las [pruebas](tests) simplemente:

    $ git clone https://github.com/Josantonius/PHP-Algorithm.git
    
    $ cd PHP-Algorithm

    $ composer install

Realizar pruebas unitarias con PHPUnit:

    $ ./vendor/bin/phpunit

Realizar pruebas de estándares de código PSR2 con PHPCS:

    $ ./vendor/bin/phpcs --standard=phpcs.ruleset.xml $(find . -name '*.php')

### ☑ Tareas pendientes

- [x] Completar tests
- [x] Completar archivos README

### Contribuir

1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).