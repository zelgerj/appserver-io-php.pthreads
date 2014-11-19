#ifndef HAVE_PTHREADS_DEBUG
#define HAVE_PTHREADS_DEBUG

#ifndef HAVE_PTHREADS_DEBUG_H
#	include <src/debug.h>
#endif

/* {{{ pthreads_debug_log will log to the pthreads log file configured via ini */
void pthreads_debug_log(const char *format, ...)
{
	if (INI_INT("pthreads.debug_enable") == 1 && INI_STR("pthreads.debug_log") != "") {
		TSRMLS_FETCH();
		va_list argList;
		char timestr[20], buffer[512], error_message[512];
		char *logfile = INI_STR("pthreads.debug_log");
		time_t timer;
		struct tm* tm_info;

		time(&timer);
		tm_info = localtime(&timer);

		strftime(timestr, 20, "%F %H:%M:%S", tm_info);
		sprintf(error_message, "[%s %lu] ", timestr, pthreads_self());

		va_start(argList, format);
		vsprintf(buffer, format, argList);
		va_end(argList);

		strcat(buffer, "\n");
		strcat(error_message, buffer);

		_php_error_log(3, error_message, logfile, NULL TSRMLS_CC);
	}
} /* }}} */

#endif
