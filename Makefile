PAGES = find pages -name "*.php"

all: PAGES
	php compile.php > indexed.php
