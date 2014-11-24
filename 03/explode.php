<?php


	$text = 'Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.';
	var_dump($text);

	$words = explode(' ', $text);
	var_dump($words);

	echo '<br>';echo '<br>';

	$email = 'roma@evercodelab.com';
	var_dump($email);

	echo '<br>';echo '<br>';

	$domain = explode('@', $email);
	var_dump($domain );

	echo '<br>';echo '<br>';

	echo $domain [1];

	echo '<br>';echo '<br>';

	$text = 'Напишите функцию, принимающую массив,
которая убирает у каждого элемента массива
окружающие пробелы, приводит все к нижнему
регистру, соединяет все элементы в строку
(формат как для контактной формы).';
	var_dump($text);

	echo '<br>';echo '<br>';

	$new = trim($text);
	echo $new;

	echo '<br>';echo '<br>';

	
	
	