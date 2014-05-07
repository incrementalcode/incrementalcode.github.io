<?php

/*
	Static site index generator.
	- Compiles all site page into an index with meta data and page html.
	- Pages themselves are not compiled to filesystem.
	- Compiling page html is the job of the router, in future versions.
*/

function compile_pages($dir = 'pages') {

	$files = glob_recursive($dir . '/*.php');
	$pages = array();

	foreach ($files as $file) {

		$page = array(
			'name' => $file
		);

		ob_start();

		include $file;

		if (!$page) continue; // no page defined

		$page['content'] = ob_get_clean();

		$pages[$page['name']] = $page;
	}

	return $pages;
}

function get_index() {
	return (file_exists('indexed.php')) ? unserialize(file_get_contents('indexed.php')) : compile_pages();
}

function create_page($page) {
	return $page;
}

function static_route($route, $set, $compiler) {}

function glob_recursive($pattern, $flags = 0)
{
  $files = glob($pattern, $flags);

  foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir)
  {
    $files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
  }

  return $files;
}

?>
