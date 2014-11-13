#ifndef HAVE_PTHREADS_DEBUG_H
#define HAVE_PTHREADS_DEBUG_H

#ifndef HAVE_PTHREADS_H
#	include <src/pthreads.h>
#endif

#ifndef HAVE_PTHREADS_STORE_H
#	include <src/store.h>
#endif

static void pthreads_debug_log(const char *format, va_list arg);

#endif
