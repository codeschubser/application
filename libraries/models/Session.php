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
 * @version     $Id: Session.php,v 0.0.1 22.10.2015 10:23:30 mitopp Exp $;
 */
class Session implements \SessionHandlerInterface
{
    /**
     * CONSTRUCTOR
     *
     * Set session environment, register own session handler and start session.
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  void
     */
    public function __construct()
    {
        // Set session environment

        // Set own session handler
        $this->register();

        // The following prevents unexpected effects when using objects as save handlers
        register_shutdown_function('session_write_close');

        // Start session
        session_start();
    }

    /**
     * Register own session handler
     *
     * @since   0.0.1
     *
     * @access  public
     * @return  bool    Returns true on success or false on failure.
     */
    public function register()
    {
        return session_set_save_handler($this, true);
    }

    public function close()
    {

    }

    public function destroy($session_id)
    {

    }

    public function gc($maxlifetime)
    {

    }

    public function open($save_path, $name)
    {

    }

    public function read($session_id)
    {

    }

    public function write($session_id, $session_data)
    {

    }

}
