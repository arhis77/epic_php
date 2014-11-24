<form action="" method="post">
	<input type="text" name="title">
	<textarea type="content"></textarea>
	<input type="submit" name"Yeah">
</form>

<?php

if (!empty($_POST['title']) && !empty($_POST['content'])) {
	// добавление поста в файл
	// берем из файла содержимое
	$filename = 'posts/posts.txt';
	$fileContents = file_get_contents($filename);
	// дописываем в содержимое в начало новый пост через разделители
	$title = $_POST['title'];
	$content = $_POST['content'];
	$fileContents_1 = $title . '-----' . $content . '=====' . $fileContents;
	// записываем обновленное соержимое обратно в файл
	file_put_contents($filename, $fileContents_1);
}

?>