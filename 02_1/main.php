<?php

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

require_once 'footer.php';