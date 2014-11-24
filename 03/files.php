<?php


	$file = 'hipster.txt';
	$text = file_get_contents($file);
	echo $text;

	echo '<br>';echo '<br>';

	$paragraph = explode ("\r\n\r\n", $text);
	var_dump($paragraph);

	echo '<br>';echo '<br>';

	
	krsort($paragraph);
	var_dump($paragraph);

	echo '<br>';echo '<br>';


	

	$paragraph_new = implode ("\r\n\r\n", $paragraph);
	var_dump($paragraph_new);
	file_put_contents ($file, $paragraph_new); 

$_SERVER
	
