| Branch | Unit Tests | Coverage | Dependency |
| ------ | ---------- | -------- | ---------- |
| [![Latest Stable Version](https://poser.pugx.org/etechnika/idna-convert/v/stable.png)](https://packagist.org/packages/etechnika/idna-convert) | [![Build Status](https://travis-ci.org/etechnika/idna-convert.png?branch=master)](https://travis-ci.org/etechnika/idna-convert) | [![Coverage Status](https://coveralls.io/repos/etechnika/idna-convert/badge.png)](https://coveralls.io/r/etechnika/idna-convert) | [![Dependency Status](https://www.versioneye.com/user/projects/5287838f632bac73d4000007/badge.png)](https://www.versioneye.com/user/projects/5287838f632bac73d4000007) |

IDNA Convert (idna_convert.class.php) prepared to packagist.
============

IDNA Convert is a fork of phlyLabs pure PHP IDNA Converter (http://idnaconv.phlymail.de/)
It converts  internationalized domain names between UTF-8 and ASCII (punycode) notation.
Orginal package is in directory lib/phlylabs.

## Installation

### Via composer

Add the package to your `composer.json` file:


    {
      "require": {
        "etechnika/idna-convert": "1.0.*"
      }
    }

Run `composer.phar update`.

## Usage

The following example describes basic usage.

	<?php

	require_once('vendor/autoload.php');
    IdnaConvert::encodeString( 'żółw.pl' ); // prints 'xn--w-uga1v8h.pl'
    IdnaConvert::decodeString( 'xn--w-uga1v8h.pl' ); // prints 'żółw.pl'

	?>