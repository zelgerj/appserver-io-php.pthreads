#ifndef HAVE_PTHREADS_DEBUG_H
#define HAVE_PTHREADS_DEBUG_H

#ifndef HAVE_PTHREADS_LOCK_H
#	include <src/debug.h>
#endif

#ifndef HAVE_PTHREADS_H
#	include <src/pthreads.h>
#endif

#ifndef HAVE_PTHREADS_THREAD_H
#	include <src/thread.h>
#endif

#include "main/php_ini.h"
#include <time.h>

void pthreads_debug_init();

void pthreads_debug_log(const char *format, ...);

#endif
