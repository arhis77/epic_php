	<?php 
	$i = 1;

	while ($i <= 10) {
		echo $i++ . '<br/>';
	}
	?>
<br/>
	<?php
		$i = 0;
		do {
			echo $i;
		} while ($i > 0);
	?>
<br/><br/>
	<?php
		$sum = 0;
		for ($i = 1; $i <= 3; $i++)
		{
			echo $i . '<br />';
			$sum += $i;
		}
		echo $sum;
	?>
<br/><br/>
$sum = $sum + $i
$sum += $i
<br><br>
<?php
	$arr = ['apple', 'strawberry', 'pie', 'cherry', 'mmm', 'sandwich'];

	while (list($key, $value) = each($arr)) {
		if (!($key % 2)) {
			//skip odd members 
			continue;
	
		}
		echo $value . '&nbsp;';
	}
?>
<?php
	$arr = ['apple', 'strawberry', 'pie', 'cherry', 'mmm', 'sandwich'];
	$arr1 = ['apple', 'strawberry', 'pie', 'cherry', 'mmm', 'sandwich'];

	foreach ()
?>

