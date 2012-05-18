<?php
define('LITHIUM_LIBRARY_PATH', 'phar://lithium.phar');

if (!include LITHIUM_LIBRARY_PATH . '/lithium/core/Libraries.php') {
	$message  = "Lithium core could not be found.  Check the value of LITHIUM_LIBRARY_PATH.";
	throw new ErrorException($message);
}

use lithium\core\Libraries;

Libraries::add('lithium');