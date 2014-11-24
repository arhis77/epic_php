<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<ul>
			<li><a href="?action=list">Главная</a></li>
			<li><a href="?action=add">Добавить пост</a></li>
		</ul>
		<?php
			$actions = ['list', 'add', 'post', 'edit', 'delete'];
			$action = isset($GET['action']) ? $GET['action'] : 'list';
			if (in_array($action, $actions)) {
				require_once $action . '.php';
			} else {
				echo 'not found';
			}
		?>
	</body>
</html>