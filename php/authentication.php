<?php 
include_once("dbcon.php");

// 11111111
// 1bbd886460827015e5d605ed44252251
if(isset($_POST["login"])){
	
	$email = filter_var($_POST["email"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$raw_password = filter_var($_POST["password"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$encrypted_password = md5($raw_password);
	
	$password=substr($encrypted_password,0,40);//substr(string,start,length)

	$query="SELECT * FROM
				tbl_users
			WHERE
			    email  = '".$email."'
			AND
				password = '".$password."'
			LIMIT
			    0,1";

	$sql= mysqli_query($link,$query);

	$count=mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);

	if($count > 0){
		session_start();
		$_SESSION['sess_id']=$row['user_id'];
		$_SESSION['fullname']= $row['firstname']." ".$row['lastname']; 
		$_SESSION['email']= $row['email']; 
		$_SESSION['is_admin']= $row['is_admin']; 

		header("location: ../dashboard.php?success");

	}else{

		header("location:../login.php?Incorect");

	}

}

?>
