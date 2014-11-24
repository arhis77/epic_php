<?php 
header('Content-Type: text/html; charset=utf-8');

$page = isset($GET['page']) ? $_GET['page'] : 'main';

$pages = [
'main' => 'Главная',
'contacts' => 'Контакты',
'about' => 'Обо мне',
'news' => 'Новости'];

require_once 'header.php';

if (in_array($page, array_keys($pages))) {
	require $page . '.php';
} else {
	require 'error.php';
}
require_once 'footer.php';


