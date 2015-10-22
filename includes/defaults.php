<?php
/**
 * Undefined constants
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
 * @version     $Id: defaults.php,v 0.0.1 22.10.2015 08:59:30 mitopp Exp $;
 */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(dirname(__FILE__)));

/**
 * Debugging
 */
if (!defined('DEBUG'))
    define('DEBUG', false);
if (!defined('DEBUG_LEVEL'))
    define('DEBUG_LEVEL', E_ALL | E_STRICT);
if (!defined('DEBUG_DISPLAY'))
    define('DEBUG_DISPLAY', false);
if (!defined('DEBUG_LOG'))
    define('DEBUG_LOG', true);
if (!defined('DEBUG_LOG_FILE'))
    define('DEBUG_LOG_FILE', ABSPATH . '/temp/debug.log');

/**
 * Sessions
 */
if (!defined('SESS_SAVEPATH'))
    define('SESS_SAVEPATH', ABSPATH . '/temp/sessions/');
if (!defined('SESS_LIFETIME'))
    define('SESS_LIFETIME', 14400);
if (!defined('SESS_TIMEOUT'))
    define('SESS_TIMEOUT', 3600);
if (!defined('SESS_GC_DIVISOR'))
    define('SESS_GC_DIVISOR', 100);
if (!defined('SESS_GC_PROB'))
    define('SESSION_GC_PROB', 1);