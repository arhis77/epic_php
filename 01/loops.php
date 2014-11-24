<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP / Циклы</title>
		<link rel="stylesheet" type="text/css" href="css/loops.css" />
	</head>
	<body>
	<div id="main">
		<h2>Циклы</h2>

			<!-- while С ПРЕДУСЛОВИЕМ -->

			<div id="block">
				<h3><red>while</red> - с предусловием</h3>
				<div id="left">
					<p>
						<code>
							<b>$i = 10;<br><br>
							<red>while</red> ($i <= 10) {<br>
							&nbsp;&nbsp;echo $i++;
							}</b>
						</code>
					</p>
				</div><!-- end of left -->
				<div id="right">
					<p>
						<?php
							$i = 1;

							while ($i <= 10) {
								echo $i++ . '&nbsp;';
							}
						?>
					</p>
				</div><!-- end of right -->
			</div><!-- end of block -->

			<!-- do-while С ПОСТУСЛОВИЕМ -->

			<div id="block">
				<h3><red>do-while</red> (цикл с постусловием)</h3>
				<div id="left">
					<p>
						<code>
							<b>$i = 0;<br><br>
							<red>do</red>{<br>
							&nbsp;&nbsp;echo $i;<br>
							} <red>while</red> ($i > 0);</b>
						</code>
					</p>
					<hr><i><b>do</b> - хотя бы один раз echo выполниться</i>
				</div><!-- end of left -->
				<div id="right">
					<p>
						<?php
							$i = 0;

							do {
								echo $i;
							} while ($i > 0);
						?>
					</p>
				</div><!-- end of right -->
			</div><!-- end of block -->

			<!-- for - цикл со счетсиком -->

			<div id="block">
				<h3><red>for</red> (цикл со счетчиком)</h3>
				<div id="left">
					<p>
						<code>
							<b>$sum = 0;<br><br>
							<red>for</red> ($i = 1; $ <=3; $i++) {<br>
								&nbsp;&nbsp;echo $i;<br>
								&nbsp;&nbsp;<red>$sum += $i;</red><br>
							}&nbsp;<red>echo $sum<red></b>
						</code>
						<hr>
						<i><b>$sum += $i</b> - то же самое, что и<br> 
						<b>$sum = $sum + $i</b></i>
					</p>
				</div><!-- end of left -->
				<div id="right">
					<p>
						<?php
							$sum = 0;

							for ($i = 1; $i <= 3; $i++) {
								echo $i . '&nbsp;';
								$sum += $i;
							} echo $sum;
						?>
					</p>
				</div><!-- end of right -->
			</div><!-- end of block -->

			<!-- // continue-->

			<div id="block">
				<h3><red>// continue</red></h3>
				<div id="left">
					<p>
						<code>
							<b><red>$arr</red> = [</b>'apple', 'strawberry', 'pie', 'cherry', 'mmm', 'sanwich'];<br><br>

							<b><red>while</red> (list($key, $value) = each($arr)) {<br>
								<red>if</red> (!($key % 2)) {</b><br>
								 <i>//skip odd members continue;</i><br>
								 <b><red>continue;</red><br>
								}<br>
								<red>echo</red> $value;<br>
							}
						</code>
						<hr>
						<i><red>Hint:</red><br>
						<b>%</b> - остаток от деления</i>
					</p>
				</div><!-- end of left -->
				<div id="right">
					<p>
						<?php
							$arr = ['apple', 'strawberry', 'pie', 'cherry', 'mmm', 'sandwich'];
							

						?>
					</p>
				</div><!-- end of right -->
			</div><!-- end of block -->
	
		

		
	</div><!-- end of main -->	
	</body>
</html>