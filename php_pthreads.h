#ifndef HAVE_PHP_PTHREADS_H
#define HAVE_PHP_PTHREADS_H
#define PHP_PTHREADS_EXTNAME "pthreads"
#define PHP_PTHREADS_VERSION "0.04"

PHP_MINIT_FUNCTION(pthreads);							/* Initialize class entries and default attributes */
PHP_MSHUTDOWN_FUNCTION(pthreads);						/* Destroy default attributes */

/** @TODO possibly Thread::__construct **/
PHP_METHOD(Thread, start);								/* Userland method to start a Thread */
PHP_METHOD(Thread, self);								/* Userland method to get current Thread identifier */
PHP_METHOD(Thread, busy);								/* Userland method to detect ability to join (wait) without blocking */
PHP_METHOD(Thread, wait);								/* Userland method to wait for a Thread */

PHP_METHOD(Mutex, create);								/* Userland mutex constructor */
PHP_METHOD(Mutex, lock);								/* Userland method to lock mutex */
PHP_METHOD(Mutex, trylock);								/* Userland method to try mutex lock */
/** @TODO boolean parameter to unlock and destroy **/
PHP_METHOD(Mutex, unlock);								/* Userland method to unlock mutex */
PHP_METHOD(Mutex, destroy);								/* Userland method to destroy mutex */

PHP_METHOD(Cond, create);								/* Userland method to create a condition */
PHP_METHOD(Cond, signal);								/* Userland method to signal on conditions */
PHP_METHOD(Cond, broadcast);							/* Userland method to broadcast on conditions */
/** @TODO: merge functionality of pthread_cond_timedwait into wait **/
PHP_METHOD(Cond, wait);									/* Userland method to wait for a condition */
PHP_METHOD(Cond, destroy);								/* Userland method to destroy condition */

extern zend_module_entry pthreads_module_entry;

#define phpext_pthreads_ptr 							&pthreads_module_entry
#define PTHREADS_FETCH_CTX(ls, id, type, element)		(((type) (*((void ***) ls))[TSRM_UNSHUFFLE_RSRC_ID(id)])->element)
#define PTHREADS_CG(ls, v)								PTHREADS_FETCH_CTX(ls, compiler_globals_id, zend_compiler_globals*, v)
#define PTHREADS_EG(ls, v)								PTHREADS_FETCH_CTX(ls, executor_globals_id, zend_executor_globals*, v)
#endif
