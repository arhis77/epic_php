<?php

	$dataString = file_get_contents ('epic-php-2.pdf');
	echo ($dataString);

	$habr = file_get_contents("http://php.net/file_get_contents");
	echo $habr;