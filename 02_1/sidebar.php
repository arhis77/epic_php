<ul>
	<?php foreach ($pages as $key => $value): ?>
		<li>
			<a href="?page=<?php echo $key; ?>"><?php echo $value; ?></a>
		</li>
	<?php endforeach; ?>
</ul>