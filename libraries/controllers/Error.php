<?php

namespace de\codeschubser\application\controllers;

/**
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
 * @package     Controllers
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: Error.php,v 0.0.1 22.10.2015 10:24:40 mitopp Exp $;
 */
class Error
{

    /**
     * CONSTRUCTOR
     *
     * Set debug environment.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  void
     */
    public function __construct()
    {
        if (DEBUG) {
            ini_set('error_reporting', DEBUG_LEVEL);

            if (DEBUG_DISPLAY) {
                ini_set('display_errors', true);
            } else {
                ini_set('display_errors', false);
            }

            if (DEBUG_LOG) {
                ini_set('log_errors', true);
                ini_set('error_log', DEBUG_LOG_FILE);
            }
        } else {
            ini_set('error_reporting',
                E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR);
        }
    }

    /**
     * Register own error handler class.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  void
     */
    public function register()
    {
        set_error_handler(array($this, 'errors'));
    }

    /**
     * Unregister own error handler class and set previous handlers.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  void
     */
    public function unregister()
    {
        restore_error_handler();
    }

    /**
     * Custom error handler.
     *
     * @since   0.0.1
     *
     * @access  public
     * @param   int     $code       Contains the level of the error raised.
     * @param   string  $message    Contains the error message.
     * @param   string  $file       Optional: Contains the filename that the error was raised in, default:__FILE__
     * @param   int     $line       Optional: Contains the line number the error was raised at, default:__LINE__
     * @param   array   $context    Optional: An array that points to the active symbol table at the point the error occurred, default:array
     * @return  bool    Every times true to disable PHP internal error handler.
     */
    public function errors($code, $message, $file = __FILE__, $line = __LINE__,
        array $context = array())
    {
        // Error code is not included in error_reporting
        if (!(error_reporting() & $code)) {
            return;
        }

        

        // Disable PHP internal error handler
        return true;
    }

}
