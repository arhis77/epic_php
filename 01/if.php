<?php
	$age = 37;

	if ($age < 20) {
		echo "«Все впереди, Jack";
	}
	elseif ($age >= 20 && $age < 30) {
		echo "Самое время взяться за ум, Jack";
	}
	else {echo "У вас есть чему поучиться, Jack";}
?>
<br>
<?php
	$age = 37;

	if ($age < 20) {
		echo "too young";
	}
	elseif ($age > 30) {
		echo "wisdom";
	}
	else {
		echo "sex, drugs, rock'n'roll";
	} 
?>
<br>
<?php
	$age = 37;

	if ($age < 30) {
		if ($age > 20) {
			echo "sex, drugs, rock'n'roll";
		}
	}
	elseif ($age <= 20) {
		echo "too young";
	}
	else {
		echo "wisdom";
	}
?>