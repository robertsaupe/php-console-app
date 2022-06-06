# php-console-app

[![Minimum PHP version: 8.0.2](https://img.shields.io/badge/php-8.0.2%2B-blue.svg?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-console-app)
[![Packagist Version](https://img.shields.io/packagist/v/robertsaupe/php-console-app?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-console-app)
[![Packagist Downloads](https://img.shields.io/packagist/dt/robertsaupe/php-console-app?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-console-app)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=for-the-badge)](LICENSE)

php based console app template

## Supporting

[GitHub](https://github.com/sponsors/robertsaupe) |
[Patreon](https://www.patreon.com/robertsaupe) |
[PayPal](https://www.paypal.com/donate?hosted_button_id=SQMRNY8YVPCZQ) |
[Amazon](https://www.amazon.de/ref=as_li_ss_tl?ie=UTF8&linkCode=ll2&tag=robertsaupe-21&linkId=b79bc86cee906816af515980cb1db95e&language=de_DE)

## Getting started

### Install

```sh
composer create-project robertsaupe/php-console-app my-console-app
```

### Console

Execute bin/console

```sh
cd my-console-app
composer console
```

### Debug

Execute bin/console-debug

```sh
cd my-console-app
composer debug
```

### Phar

Execute build/console.phar

```sh
cd my-console-app
composer phar
```

### Compile Phar

Install [box](https://github.com/box-project/box/blob/master/doc/installation.md#installation)

```sh
cd my-console-app
composer compile
```

### PHPStan

What is [PHPStan](https://phpstan.org)?

```sh
cd my-console-app
composer stan
```

## Credits

- [box-project/box](https://github.com/box-project/box) for some basics
  - Kevin Herrera <kevin@herrera.io>
  - Théo Fidry <theo.fidry@gmail.com>
