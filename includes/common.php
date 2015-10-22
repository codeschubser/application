<?php

use de\codeschubser\application\vendors\Autoloader,
    de\codeschubser\application\controllers\Error;

/**
 * Advanced configuration file.
 *
 * The MIT License
 *
 * Copyright 2015 Codeschubser.de
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category    OOP Application
 * @package     Includes
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: common.php,v 0.0.1 22.10.2015 09:05:15 mitopp Exp $;
 */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(dirname(__FILE__)));

// Main configuration file
require_once(ABSPATH . '/config.php');

// Default configuration
require_once(ABSPATH . '/includes/defaults.php');

// Internal constants
require_once(ABSPATH . '/includes/constants.php');

// Compatibility functions
require_once(ABSPATH . '/includes/compat.php');

// Standalone functions
require_once(ABSPATH . '/includes/functions.php');

// Autoloader
require_once(ABSPATH . '/libraries/vendors/Autoloader.php');

$loader = new Autoloader();
$loader->addNamespace('\de\codeschubser\application\controllers', ABSPATH . '/libraries/controllers');
$loader->addNamespace('\de\codeschubser\application\exceptions', ABSPATH . '/libraries/exceptions');
$loader->addNamespace('\de\codeschubser\application\interfaces', ABSPATH . '/libraries/interfaces');
$loader->addNamespace('\de\codeschubser\application\models', ABSPATH . '/libraries/models');
$loader->addNamespace('\de\codeschubser\application\vendors', ABSPATH . '/libraries/vendors');
$loader->addNamespace('\de\codeschubser\application\views', ABSPATH . '/libraries/views');
$loader->addNamespace('\de\codeschubser\application\plugins', ABSPATH . '/plugins');
$loader->register();

// Error handler
$erh = new Error();
$erh->register();
