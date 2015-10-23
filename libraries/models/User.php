<?php

namespace de\codeschubser\application\models;

/**
 * User handling class.
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
 * @package     Models
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: User.php,v 0.0.1 22.10.2015 10:12:08 mitopp Exp $;
 */
class User
{

    /**
     * Sign in a user.
     *
     * @since   0.0.1
     *
     * @access  public
     * @static
     * @param   int     $user   The user ident.
     * @return  bool    True on success, otherwise false.
     */
    public static function login($user)
    {
        // Is ident a integer and greater then zero
        if (is_int($user) && 0 < $user) {

        }

        // Login attempt failed.
        return false;
    }

    /**
     * Returns the check result of an user state.
     *
     * @since   0.0.1
     *
     * @access  public
     * @static
     * @param   string      $state  The state to check.
     * @return  null|bool   Bool as result, null if $state not defined.
     */
    public static function is($state)
    {
        // Default response.
        $result = null;

        // Return result
        return $result;
    }

}
