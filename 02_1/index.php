<?php
header('Content-Type: text/html; charset=utf-8');

$page = isset($_GET['page']) ? $_GET['page'] : 'main';

$pages = array(
	'main' => 'Главная',
	'contacts' => 'Контакты',
	'about' => 'Обо мне',
	'news' => 'Новости'
);

require_once 'header.php';
require_once 'sidebar.php';
require_once 'people.php';

if (in_array($page, array_keys($pages))) {
	require $page . '.php';
} else {
	require_once 'error.php';
}

require_once 'footer.php';