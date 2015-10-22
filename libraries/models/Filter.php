<?php

namespace de\codeschubser\application\models;

/**
 * Filters different variables.
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
 * @abstract
 * @category    OOP Application
 * @package     Models
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: Filter.php,v 0.0.1 22.10.2015 10:22:38 mitopp Exp $;
 */
abstract class Filter
{
    /**
     * Gets a specific external variable by name and optionally filters it.
     *
     * @since   0.0.1
     *
     * @see     filter_input
     *
     * @access  public
     * @static
     * @param   string  $name   Name of a variable to get.
     * @param   int     $filter Optional: The ID of the filter to apply, default:516
     * @return  mixed|bool|null Value of the requested variable on success, false if the filter fails
     *                          or null if the variable is not set.
     */
    public static function post($name, $filter = FILTER_DEFAULT)
    {
        return filter_input(INPUT_POST, $name, $filter);
    }
}
