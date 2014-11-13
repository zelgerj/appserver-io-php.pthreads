#ifndef HAVE_PTHREADS_DEBUG
#define HAVE_PTHREADS_DEBUG

#ifndef HAVE_PTHREADS_DEBUG_H
#	include <src/debug.h>
#endif
/*
FILE *pthreads_log = NULL;

static void pthreads_debug_log(const char *format, va_list arg)
{
	char *message;
	vsprintf(message, format, arg);

    if (pthreads_log && strlen(message) > 0) {
    	fprintf(pthreads_log, "%s\n", message);
    }
}
*/

#endif
