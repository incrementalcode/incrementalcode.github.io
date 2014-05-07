<?php require 'blog.php'; ?>
<?php $index = get_index('pages'); ?>
<?php foreach ($index as $name => $page) {
	echo $page['name'] . "<br>";
} ?>
