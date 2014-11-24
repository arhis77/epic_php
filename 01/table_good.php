<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px;">
		<?php

			$a = array(TRUE,	FALSE,	1,	0,	-1,	"1", "0",	"-1",	NULL,	array(),	"php",	"");

			echo '<tr><td></td>';

			foreach ($a as $i){
				echo '<td>'.var_export($i, TRUE).'</td>';
			}

			echo '</tr>';

			foreach ($a as $i){

				echo '<td>'.var_export($i, TRUE).'</td>';

				foreach ($a as $j) {

					$v = ($j == $i) ? 'true' : 'false';
	
					echo '<td style="width: 25px; text-align: center;">'.$v.'</td>';
				}

				echo '</tr>';
			}

		?>
	</table>
</body>
</html>