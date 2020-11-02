<?php
	// Start Session First
	session_start();
	include('dbcon.php');

	if ( isset( $_SESSION['sess_id'] ) ) {

		$query=" 
			SELECT * FROM tbl_users where user_id='".$_SESSION['sess_id']."'
		";
		
		$sql=mysqli_query($link,$query) or die (mysqli_error());

		$count=mysqli_num_rows($sql);

		if($count == 0){//No user so destroy session 
			session_destroy();
			header('location: dashboard.php');
		}

	} else {
	    header("Location: login.php");   
	}

?>