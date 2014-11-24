<?php

	$words = [
		'asdf   ',
		'wqerqwer   ',
		'   aASd',
		'zxcvadgergjlkfvs',];
foreach ($words as $key => $value) {
	// ЗАММЕНЯЕМ ЗАГЛАВНЫЕ БУКВЫ НА СТРОЧНЫЕ И УДАЛЯЕМ ПРОБЕЛЫ 
	$words[$key] = strtolower(trim($value));
}
var_dump($words);

echo'<br>';echo'<br>';

// СКЛЕИВАЕМ ЗНАЧЕНИЯ (БЕЗ ПРОБЕЛОВ ВООБЩЕ)
$imploded_words = implode($words);
var_dump($imploded_words);

