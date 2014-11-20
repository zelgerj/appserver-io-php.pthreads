<?php

/**
 * \Stackable
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
 * @package   TechDivision_Application
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.threaded.php
 * @since     1.0.1
 */

/**
 * Stackable objects form the basis of pthreads ability to execute user code asynchronously;
 * they expose and include synchronization methods and various useful interfaces.
 *
 * Stackable objects, most importantly, provide implicit safety for the programmer;
 * all operations on the object scope are safe.
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.threaded.php
 * @since     1.0.1
 *
 */
class Stackable implements Traversable, Countable, ArrayAccess
{

    /**
     * Fetches a chunk of the objects properties table of the given size
     *
     * @param int $size The number of items to fetch
     *
     * @link http://www.php.net/manual/en/threaded.chunk.php
     * @return array An array of items from the objects member table
     */
    public function chunk($size)
    {
    }

    /**
     * This method is executed when using the count() function on an object implementing Countable.
     *
     * @return int The custom count as an integer
     * @see \Countable::count()
     * @link http://php.net/manual/en/countable.count.php
     */
    public function count()
    {
    }

    /**
     * Retrieves terminal error information from the referenced object
     *
     * @link http://www.php.net/manual/en/threaded.getterminationinfo.php
     * @return array|bool array containing the termination conditions of the referenced object
     */
    public function getTerminationInfo()
    {
    }

    /**
     * Tell if the referenced object is executing
     *
     * @link http://www.php.net/manual/en/threaded.isrunning.php
     * @return bool A boolean indication of state
     */
    public function isRunning()
    {
    }

    /**
     * Tell if the referenced object exited, suffered fatal errors, or threw uncaught exceptions during execution
     *
     * @link http://www.php.net/manual/en/threaded.isterminated.php
     * @return bool A boolean indication of state
     */
    public function isTerminated()
    {
    }

    /**
     * Tell if the referenced object is waiting for notification
     *
     * @link http://www.php.net/manual/en/threaded.iswaiting.php
     * @return bool A boolean indication of state
     */
    public function isWaiting()
    {
    }

    /**
     * Lock the referenced objects property table
     *
     * @link http://www.php.net/manual/en/threaded.lock.php
     * @return bool A boolean indication of state
     */
    public function lock()
    {
    }

    /**
     * Merges data into the current object
     *
     * @param mixed $from      The data to merge
     * @param bool  $overwrite Overwrite existing keys flag, by default true
     *
     * @return bool A boolean indication of success
     * @link http://www.php.net/manual/en/threaded.merge.php
     */
    public function merge($from, $overwrite = true)
    {
    }

    /**
     * Send notification to the referenced object
     *
     * @return bool A boolean indication of success
     * @link http://www.php.net/manual/en/threaded.notify.php
     */
    public function notify()
    {
    }

    /**
     * Returns the value at specified offset.
     *
     * This method is executed when checking if offset is empty().
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return mixed The value
     * @see \ArrayAccess::offsetGet()
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     */
    public function offsetGet($offset)
    {
    }

    /**
     * Assigns a value to the specified offset.
     *
     * @param mixed $offset The offset to assign the value to
     * @param mixed $value  The value to set
     *
     * @return void
     * @see \ArrayAccess::offsetSet()
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Whether or not an offset exists.
     *
     * This method is executed when using isset() or empty() on objects implementing ArrayAccess.
     *
     * @param mixed $offset An offset to check for
     *
     * @return bool Returns TRUE on success or FALSE on failure.
     * @see \ArrayAccess::offsetExists()
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     */
    public function offsetExists($offset)
    {
    }

    /**
     * Unsets an offset.
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     * @see \ArrayAccess::offsetUnset()
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Pops an item from the objects property table
     *
     * @return mixed The last item from the objects properties table
     * @link http://www.php.net/manual/en/threaded.pop.php
     */
    public function pop()
    {
    }

    /**
     * The programmer should always implement the run method for objects that are intended for execution.
     *
     * @return void The methods return value, if used, will be ignored
     * @link http://www.php.net/manual/en/threaded.run.php
     */
    public function run()
    {
    }

    /**
     * Shifts an item from the objects properties table
     *
     * @return mixed The first item from the objects properties table
     * @link http://www.php.net/manual/en/threaded.shift.php
     */
    public function shift()
    {
    }

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     *
     * @param \Closure $function The block of code to execute
     * @param mixed    $args     Variable length list of arguments to use as function arguments to the block
     *
     * @return mixed The return value from the block
     * @link http://www.php.net/manual/en/threaded.synchronized.php
     */
    public function synchronized(\Closure $function, $args = null)
    {
    }

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @link http://www.php.net/manual/en/threaded.unlock.php
     * @return bool A boolean indication of success
     */
    public function unlock()
    {
    }

    /**
     * Waits for notification from the Stackable
     *
     * @param int $timeout An optional timeout in microseconds
     *
     * @return bool A boolean indication of success
     * @link http://www.php.net/manual/en/threaded.wait.php
     */
    public function wait($timeout)
    {
    }
}
