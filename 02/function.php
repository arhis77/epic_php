<?php
	
	function textByAge($age = 99) {
		global $test;
		echo $test;
		if ($age < 20) {
			echo "too young";
		} elseif ($age > 30) {
			echo "wisdom";
		} else {
			echo "sex, drugs, rock'n'roll";
		}
	}
	for ($i = 1; $i < 100; $i++) {
		$value = textByAge($i);
		echo "<br />";
}



