<?php

namespace de\codeschubser\application\exceptions;

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
 * @package     Exceptions
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: ErrorException.php,v 0.0.1 22.10.2015 10:06:22 mitopp Exp $;
 */
class ErrorException extends \ErrorException
{

    /**
     * CONSTRUCTOR
     *
     * Override parent constructor to make $message and $code not optionally.
     *
     * @since   0.0.1
     *
     * @access  public
     * @param   string      $message    The Exception message to throw.
     * @param   int         $code       The Exception code.
     * @param   int         $severity   Optional: The severity level of the exception, default:1
     * @param   string      $filename   Optional: The filename where the exception is thrown, default:__FILE__
     * @param   int         $lineno     Optional: The line number where the exception is thrown, default:__LINE__
     * @param   \Exception  $previous   Optional: The previous exception used for the exception chaining, default:null
     * @return  void
     */
    public function __construct($message, $code, $severity = 1, $filename = __FILE__,
        $lineno = __LINE__, \Exception $previous = null)
    {
        parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
    }

}
