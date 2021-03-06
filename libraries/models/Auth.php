<?php

namespace de\codeschubser\application\models;

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
 * @package     Models
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: Auth.php,v 0.0.1 22.10.2015 11:40:15 mitopp Exp $;
 */
class Auth
{

    /**
     * Returns the result of a logon attempt.
     *
     * @since   0.0.1
     *
     * @access  public
     * @static
     * @param   string      $username   The user name for the attempt.
     * @param   string      $password   The password for the attempt.
     * @return  int|bool    The user ID if successful, otherwise false.
     */
    public static function attempt($username, $password)
    {
        // TODO: Compare credentials
        // Attempt failed
        return false;
    }

    /**
     * Check if user is authenticated from session.
     *
     * @since   0.0.1
     *
     * @access  public
     * @static
     * @return  bool    True if authenticated, otherwise false.
     */
    public static function isAuthenticated()
    {
        if (Session::get('ident')) {
            return true;
        }

        return false;
    }

    /**
     * Check if user has timeout from session.
     *
     * @since   0.0.1
     *
     * @access  public
     * @static
     * @return  bool    True if timeout, otherwise false.
     */
    public static function hasTimeout()
    {
        if (self::isAuthenticated()) {
            if (Session::get('activity')) {
                if (SESS_TIMEOUT <= (time() - Session::get('activity'))) {
                    return false;
                }
            }
        }

        return true;
    }

}
