<?php

/**
 * \Thread
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
 * @link      http://www.php.net/manual/en/class.thread.php
 * @since     1.0.1
 */

/**
 * An implementation of a Thread should extend this declaration, implementing the run method.
 * When the start method of that object is called, the run method code will be executed in separate Thread.
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.thread.php
 * @since     1.0.1
 */
class Thread extends Stackable
{

    /**
     * Detaches a thread
     *
     * @return bool A boolean indication of success
     */
    public function detach()
    {
    }

    /**
     * Will return the identity of the Thread that created the referenced Thread
     *
     * @link http://www.php.net/manual/en/thread.getcreatorid.php
     * @return int A numeric identity
     */
    public function getCreatorId()
    {
    }

    /**
     * Will return the instance of currently executing thread
     *
     * @return static
     */
    public function getCurrentThread()
    {
    }

    /**
     * Will return the identity of the currently executing thread
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthreadid.php
     * @return int
     */
    public static function getCurrentThreadId()
    {
    }

    /**
     * Will return the identity of the referenced Thread
     *
     * @link http://www.php.net/manual/en/thread.getthreadid.php
     * @return int
     */
    public function getThreadId()
    {
    }

    /**
     * Tell if the referenced Thread has been joined by another context
     *
     * @link http://www.php.net/manual/en/thread.isjoined.php
     * @return bool A boolean indication of state
     */
    public function isJoined()
    {
    }

    /**
     * Tell if the referenced Thread has been started
     *
     * @link http://www.php.net/manual/en/thread.isstarted.php
     * @return bool A boolean indication of state
     */
    public function isStarted()
    {
    }

    /**
     * Causes the calling context to wait for the referenced Thread to finish executing
     *
     * @link http://www.php.net/manual/en/thread.join.php
     * @return bool A boolean indication of state
     */
    public function join()
    {
    }

    /**
     * Kills the referenced thread, dangerously !
     *
     * @link http://www.php.net/manual/en/thread.kill.php
     */
    public function kill()
    {
    }

    /**
     * Will start a new Thread to execute the implemented run method
     *
     * @param int $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @link http://www.php.net/manual/en/thread.start.php
     * @return bool A boolean indication of success
     */
    public function start($options = PTHREADS_INHERIT_ALL)
    {
    }

    /**
     * Will execute the Callable in the global scope
     *
     * @param Callable $block   The code to execute
     * @param ...      $args    Variable length list of arguments to pass to the Callable upon execution
     *
     * @link http://www.php.net/manual/en/thread.start.php
     * @return bool A boolean indication of success
     */
    public static function globally(Callable $block [, $args])
    {
    }
}
