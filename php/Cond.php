<?php

/**
 * \Cond
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.cond.php
 * @since     1.0.1
 */

/**
 * The static methods contained in the Cond class provide direct access to Posix Condition Variables.
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.cond.php
 * @since     1.0.1
 */
class Cond
{

    /**
     * Broadcast to all Threads blocking on a call to Cond::wait().
     *
     * @param int $condition
     *            A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.broadcast.php
     * @return bool A boolean indication of success
     */
    final public static function broadcast($condition)
    {}

    /**
     * Creates a new Condition Variable for the caller.
     *
     * @link http://www.php.net/manual/en/cond.create.php
     * @return int A handle to a Condition Variable
     */
    final public static function create()
    {}

    /**
     * Destroy a condition
     *
     * Destroying Condition Variable handles must be carried out explicitly by the programmer when they are
     * finished with the Condition Variable.
     * No Threads should be blocking on a call to Cond::wait() when the call to Cond::destroy() takes place.
     *
     * @param int $condition
     *            A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.destroy.php
     * @return bool A boolean indication of success
     */
    final public static function destroy($condition)
    {}

    /**
     * Signal a Condition
     *
     * @param int $condition
     *            A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.signal.php
     * @return bool A boolean indication of success
     */
    final public static function signal($condition)
    {}

    /**
     * Wait for a signal on a Condition Variable, optionally specifying a timeout to limit waiting time.
     *
     * @param int $condition
     *            A handle to a Condition Variable returned by a previous call to Cond::create()
     * @param int $mutex
     *            A handle returned by a previous call to Mutex::create() and owned (locked) by the caller.
     * @param int $timeout
     *            An optional timeout, in microseconds
     *
     * @return bool A boolean indication of success
     */
    final public static function wait($condition, $mutex, $timeout = null)
    {}
}
