<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP / Условные операторы</title>
		<link rel="stylesheet" type="text/css" href="css/operators.css" />
	</head>
	<body>
		<h2>Условные операторы</h2>
		<p>
			<red><b>if</b></red> <b>($condition === true) {</b><br>
				echo 'будет выполнено это';<br>
			<b>}</b> <red><b>elsif</b></red> <b>($anotherCondition === true) {</b><br>
				echo 'будет выполнено другое';<br>
			<b>}</b> <red><b>else</b></red> <b>{</b><br>
				echo 'ну и на крайний случай';<br>
			<b>}</b>
		</p>
		<p>
			<?php
				if ($condition === true) {
					echo 'будет выполнено это';
				} elseif ($anotherCondition === true) {
					echo 'будет выполнено другое';
				} else {
					echo 'ну и на всякий случай';
				}
			?>
		</p>
		<p>
			<h3>Условие может быть выражением или функцией</h3>
			<code><b>if ($homer_is_happy > 155)</b> {<br>
				echo 'Bart is sad';<br>
			} <b>else</b> {<br>
			 	echo 'Bart is happy!';<br>
			}</code>
		</p>
		<p>
			<?php
				$homer_is_happy = 153;

				if ($homer_is_happy > 155) {
					echo 'Bart is sad';
				} else {
					echo 'Bart is happy!';
				}
			?>
		</p>
		<p>
			<code>
				<b><red>if</red> (you_are_hungry()) {</b><br>
				go_eat_something();<br>
				<b>}</b>
			</code>
		</p>
		<p>
			<code>
				<b><red>if</red> ($homer_is_fat = eat_donuts()) {</b><br>
					$homer = "fat ass!";<br>
					<b>}</b>
			</code>
		</p>
		<p>
		<h3>Условия могут быть вложенными</h3>
		<code>
			<b><red>if</red> ($firstCondition == true) {<br>
					&nbsp;&nbsp;<red>if</red> ($secondCondition == true) {<br>
						&nbsp;&nbsp;&nbsp;&nbsp;echo</b> 'Оба условия выполнены';<br>
					&nbsp;&nbsp;<b>}<br>
				}</b>
		</code>
		</p>
		<p>
			<?php
				$firstCondition = true;
				$secondCondition = true;

				if ($firstCondition === true) {
					if ($secondCondition =true) {
						echo 'Оба условия выполнены';
					}
				}
			?>
		</p>
	</body>
</html>