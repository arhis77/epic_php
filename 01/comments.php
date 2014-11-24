<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Комментарии в PHP</title>
		<link rel="stylesheet" type="text/css" href="css/comments.css" />
	</head>
	<body>
		<h2>Комментарии</h2>
		<p>
			<h3>Правило #1:</h3>
			// Эту строчку<br>
			//интерпретатор<br>
			//выполнять<br>
			//не будет<br>
		</p>
		<p>
			<?php
				// Эту строчку
				//интерпретатор
				//выполнять
				//не будет
			?>
		</p>
		<p>
			<h3>Правило #2:</h3>
			/* Эту строчку<br>
			интерпретатор<br>
			выполнять<br>
			тоже не будет */<br>
		</p>
		<p>
			<?php
				/* Эту строчку
				интерпретатор
				выполнять
				тоже не будет */
			?>
		</p>
		<p>
			/**<br>
			*API Documentation Example<br>
			*<br>
			*@param string $bar<br>
			*/<br>
			function foo($bar) {}<br>
		</p>
		<p>
			<?php
				/**
				*API Documentation Example
				*
				*@param string $bar
				*/
				function foo($bar) {}
			?>
		</p>
		<p>
			<h3>Правило #3:</h3>
			<b>$comments = true;</b><br><br>
			 /* Чем больше комментариев,<br>
				тем проще разобраться потом. Но код надо<br>
				стараться писать так, чтобы он был понятен и без<br>
				комментариев. */<br>
		</p>
		<p>
			<?php
				/* Чем больше комментариев,<br>
				тем проще разобраться потом. Но код надо<br>
				стараться писать так, чтобы он был понятен и без<br>
				комментариев. */
			?>
		</p>	
		<p>
			<h3>Правило #4:</h3>
			 /* В этом случае сначала следует комментарий, на
				следующей строчке действие */<br><br>
			<b>$action_first = 0;</b><br>
		</p>
		<p>
			<?php
				/* В этом случае сначала следует комментарий, на
				следующей строчке действие */
			?>
		</p>
		<p>
			<h3>Правило #5:</h3>
			<b>$action_first = 1;</b> // на одной строке действие идет первым
		</p>
		<p>
			<?php
				$action_first = 1; // на одной строке действие идет первым
			?>
		</p>	
		<p>
			<h3><red>ВАЖНО!!!</red></h3>
			/* this is<br>
			commented */ <red><b>but this is not */</b></red><br><br>
			#This is also a single line comment<br>
			#New line comment?<b><red>>Here new line comment<br>
			dont work, and this will be printed</red></b><br>
		</p>
			<?php
				/* this is
				commented */
			?><br>
			<?php
				#This is also a single line cooment
				#New line comment?>Here new line comment
				dont work, and this will be printed
			?>

	</body>
</html>