<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table_1.css" />
	</head>
	<body>
	<p>
		<?php
			for ($i = 0; $i <= 10; $i++) {
				for ($j = 0; $j <= 10; $j++) {
					echo $i . "<span style='background: green; color: white'>&nbsp;&nbsp;" 
					. $j . "<span style='background: yellow; color: #333;'>&nbsp;&nbsp;";}
						
			}
		?>
	</p>
	<p>
		<?php
			for ($i = 0; $i <= 10; $i++) {
				for ($j = 0; $j <= 10; $j++) {
					echo $i * $j . "&nbsp;"; }
			}
		?>
	</p>
	<p>
		<table>
			<?php
				for ($i = 0; $i <= 10; $i++) {
					echo "<tr>";
					for ($j = 0; $j <= 10; $j++) {
						echo "<td>";
						if ($i == 0 & $j == 0) {
							echo "";
						} elseif ($i == 0) {
							echo $j;
						} elseif ($j == 0) {
							echo $i;
						} else {
							echo $i * $j;
						}
						echo "</td>";
					} 
					echo "</tr>";
				}
			?>
		</table>	
	</p>
	</body>
</html>