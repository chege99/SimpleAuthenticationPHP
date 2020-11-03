<?php

if(isset($_POST['save_details'])){
	$category = filter_var($_POST['category'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	include('./categories.php');

	CreateCategory($category);

	header('location: ../categories.php');
}



?>