<?php
/*
 * This file is part of the Etechnika package.
 *
 * (c) Tomasz Rutkowski <tomasz@rutkowski.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$loader = require __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR .'autoload.php';
$loader->add('Etechnika\\', __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR .'src');
