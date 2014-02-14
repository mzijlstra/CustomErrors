<?php
# this gets included through php.ini's  auto_prepend_file directive

function __mumstudents_shutdown_handler() {
	$last_error = error_get_last();
	if ($last_error['type'] === E_ERROR || $last_error['type'] === E_PARSE ) {
		// show the custom error page
		include("/var/www/error/500.php");
	}
}

register_shutdown_function("__mumstudents_shutdown_handler");

?>
