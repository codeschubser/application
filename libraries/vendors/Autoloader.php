<?php

namespace de\codeschubser\application\vendors;

/**
 * PSR-4 Autoloading class.
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
 * @see         http://www.php-fig.org/psr/psr-4/
 *
 * @category    OOP Application
 * @package     Vendors
 * @author      Michael Topp <blog@codeschubser.de>
 * @copyright   Copyright (c), 2015 Codeschubser.de
 * @license     http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version     $Id: Autoloader.php,v 0.0.1 22.10.2015 09:19:42 mitopp Exp $;
 */
class Autoloader
{
    /**
     * An associative array where the key is a namespace prefix and the value
     * is an array of base directories for classes in that namespace.
     *
     * @since   0.0.1
     *
     * @access  protected
     * @var     array
     */
    protected $prefixes = array();

    /**
     * Register loader with SPL autoloader stack.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  bool
     */
    public function register()
    {
        return spl_autoload_register(array($this, 'load'));
    }

    /**
     * Unregister loader with SPL autoloader stack.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  bool
     */
    public function unregister()
    {
        return spl_autoload_unregister(array($this, 'load'));
    }

    /**
     * Adds a base directory for a namespace prefix.
     *
     * @since   0.0.1
     *
     * @access  public
     * @param   string  $prefix     The namespace prefix.
     * @param   string  $base_dir   A base directory for class files in the namespace.
     * @param   bool    $prepend    If true, prepend the base directory to the stack instead of
     *                              appending it; this causes it to be searched first rather than last.
     * @return  void
     */
    public function addNamespace($prefix, $base_dir, $prepend = false)
    {
        // Normalize namespace prefix
        $prefix = trim($prefix, '\\') . '\\';

        // Normalize the base directory with a trailing separator
        $base_dir = rtrim($base_dir, DIRECTORY_SEPARATOR) . '/';

        // Initialize the namespace prefix array
        if (false === isset($this->prefixes[$prefix])) {
            $this->prefixes[$prefix] = array();
        }

        // Retain the base directory for the namespace prefix
        if ($prepend) {
            array_unshift($this->prefixes[$prefix], $base_dir);
        } else {
            array_push($this->prefixes[$prefix], $base_dir);
        }
    }

}
