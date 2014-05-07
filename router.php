<?php

require_once 'blog.php';

$pages = get_index('pages');

// this is deterministic routing,
// where the router knows the exact set of possible routes,
// and can therefore pre-compile all content
static_route('/:postname', array(
		// set of values and function to compile result for one value
		array_keys($pages), function($postname) {
			// note: instead of returning directly we could compile into a custom category template wrapper
			return $pages[$postname];
		}
	)
);

?>
