<?php

if(isset($_POST['save_details'])){
	$firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$is_admin = filter_var($_POST['is_admin'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$raw_password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$encrypted_password = md5($raw_password);
	//reduced password
	$passwordX=substr($encrypted_password,0,40);//substr(string,start,length)

	include('./users.php');

	CreateUser($firstname,$lastname,$email,$passwordX,$is_admin);

	header('location: ../users.php');


}else if(isset($_POST['edit_user'])){

	include('./users.php');

}else if(isset($_POST['delete_user'])){

	$user_id = filter_var($_POST['user_id'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	include('./users.php');

	DeleteUser($user_id);

	header('location: ../users.php?deleted_succesfully');

}



?>