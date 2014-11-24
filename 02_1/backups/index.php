<?php 

require 'header.php';
require 'sidebar.php';
$input = $_GET['page']; 

if ($input == 'about') {
	require 'about.php';
} elseif ($input == 'contacts') {
	require 'contacts.php';
} else {
	require 'main.php';
}

require 'footer.php'; 

?>


