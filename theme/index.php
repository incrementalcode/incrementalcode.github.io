<?php $site = array(); ?>
<html>
	<head>
		<title>
			<?php $site['title'] = 'Incremental Code: Internet Software Studio'; ?>
			<?php echo ($page['title']) ? $page['title'] : $site['title']; ?>
		</title>
		<link rel="stylesheet" href="/theme/style.css"/>
	</head>
	<body>
		<?php $index = get_index('pages'); ?>

		<h1><?php echo $site['title'] ?></h1>

		<dl>
		<dl><dt>Agency ..........</dt><dd>Done on behalf of brands</dd></dl>
		<dl><dt>Lab .............</dt><dd></dd>Self-sustaining products</dl>
		<dl><dt>Playground ......</dt><dd></dd>Quick products that spark our interest</dl>
		<dl><dt>Lair ............</dt><dd></dd>Technically driven explorations</dl>
		</dl>

		<h2>Say hello...</h2>

		<dl>
		<dt>Email</dt><dd><a href="mailto:hello@incremental.co">hello@incremental.co</a></dd>
		</dl>
		<dl>
		<dt>Twitter</dt><dd><a href="http://twitter.com/incrementalcode">@incrementalcode</a></dd>
		</dl>

		<h2>Recent articles</h2>
		<?php foreach ($index as $name => $page) {
			echo $page['title'] . "<br>";
		} ?>
	</body>
</html>
