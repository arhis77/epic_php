<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP / Условные операторы</title>
		<link rel="stylesheet" type="text/css" href="css/operators_age.css" />
	</head>
	<body>
	<div id="main">
		<h2>Условные операторы</h2>
		<h3>Задание</h3>
		<blockgoute><i>Задайте переменную $age, равную вашемувозрасту. Сделайте условие: 
		если вам меньше 20, то выведите «Все впереди, Jack» 20-30 — «Самое время взяться за ум, Jack»
		больше 30 — «У вас есть чему поучиться, Jack»</i>
		</blockgoute>

		<!-- ВАРИАНТ №1 -->

		<div id="block">
			<div id="left">
				<p>
					<code>
						<b>$age = 37;<br><br>
						<red>if</red> ($age < 20) {<br>
						&nbsp;&nbsp;echo</b> "Все впереди, Jack"<b>;<br>
						<red>elseif</red> ($age >= 20 <red>&&</red> $age < 30) {<br>
						&nbsp;&nbsp;echo</b> "Самое время взяться за ум, Jack"}<b>;<br>
						} <red>else</red> {<br>
						&nbsp;&nbsp;echo</b> "У Вас есть чему поучиться, Jack"<b>;<br>
						}</b>
					</code>
				</p>
			</div><!-- end of left -->
			<div id="right">
				<?php
					$age = 37;

					if ($age < 20 ) {
						echo "Все впереди, Jack";
					} elseif ($age >= 20 && $age < 30) {
						echo "Самое время взяться за ум, Jack";
					} else {
						echo "У Вас усть чему поучиться, Jack";
					}
				?>
			</div><!-- end of right -->
		</div><!-- end of block -->

		<!-- ВАРИАНТ №2 -->

		<div id="block">
			<div id="left">
				<p>
					<code>
						<b>$age = 37;<br><br>
						<red>if</red> ($age < 20) {<br>
						&nbsp;&nbsp;echo</b> "too young"<b>;<br>
						<red>elseif</red> ($age > 30) {<br>
						&nbsp;&nbsp;echo</b> "wisdom"}<b>;<br>
						} <red>else</red> {<br>
						&nbsp;&nbsp;echo</b> "sex, drugs, rock'n'roll"<b>;<br>
						}</b>
					</code>
				</p>
			</div><!-- end of left -->
			<div id="right">
				<?php
					$age = 37;

					if ($age < 20) {
						echo "too young";
					} elseif ($age > 30) {
						echo "wisdom";
					} else {
						echo "sex, drugs, rock'n'roll";
					}
				?>
			</div><!-- end of right -->
		</div><!-- end of block -->

		<!-- ВАРИАНТ №3 -->

		<div id="block">
			<div id="left">
				<p>
					<code>
						<b>$age = 37;<br><br>
						<red>if</red> ($age < 30 ) {<br>
						&nbsp;&nbsp;<red>if</red> ($age > 20) {<br>
						&nbsp;&nbsp;&nbsp;&nbsp;echo</b> "sex, drugs, rock'n'roll"<b>;<br>
						&nbsp;&nbsp;}<red>elseif</red> ($age <= 20) {<br>
						&nbsp;&nbsp;&nbsp;&nbsp;echo</b> "too young"<b>;<br>
						&nbsp;&nbsp;} <red>else</red> {<br>
						&nbsp;&nbsp;&nbsp;&nbsp;echo</b> "wisdom"<b>;<br>
						&nbsp;&nbsp;}</b>
					</code>
				</p>
			</div><!-- end of left -->
			<div id="right">
				<?php
					$age = 37;

					if ($age < 30) {
						if ($age > 20 ) {
							echo "sex, drugs, rock'n'roll";
						}
					} elseif ($age <= 20) {
						echo "too young";
					} else {
						echo "wisdom";
					}
				?>
			</div><!-- end of right -->
		</div><!-- end of block -->

		
	</div><!-- end of main -->	
	</body>
</html>