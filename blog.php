<?php

function compile_index($dir = '.') {
	var $files = glob($dir . '/*.php');

	foreach ($files as $file) {
		include_once $file;
	}

	return $_GLOBAL['index'];
}

?>
