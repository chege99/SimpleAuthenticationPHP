<?php
//user_id,firstname,lastname,email,password,is_admin
// CreateUser('stanley','ngugi','stanley.cns@gmail.com','awdqw',0);
// UpdateUser(5,'3stanley','3ngugi','3stanley.cns@gmail.com','312344556',1220);
// DeleteUser(1);
CreateUser("Percy","Jackson","percy@gmail.com","1bbd886460827015e5d605ed44252251",1);

function CreateUser($firstname,$lastname,$email,$passwordX,$is_admin){
	require_once('./dbcon.php');
	$query ="
		INSERT INTO 
			tbl_users(firstname,lastname,email,password,is_admin)
		VALUES(
			'".$firstname."',
			'".$lastname."',
			'".$email."',
			'".$password."',
			'".$is_admin."')
	";
	
	$query_exec = mysqli_query($link,$query) or die (mysqli_error());

}

function UpdateUser($user_id,$firstname,$lastname,$email,$passwordX,$is_admin){
	require_once('./dbcon.php');
	
	$query ="
		UPDATE  
			tbl_users
		SET
			firstname = '".$firstname."',
			lastname ='".$lastname."',
			email ='".$email."',
			password ='".$passwordX."',
			is_admin ='".$is_admin."'
		WHERE
			user_id='".$user_id."'

	";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());

}

function DeleteUser($user_id){
	require_once('./dbcon.php');

	$query = "
		DELETE FROM 
			tbl_users
        WHERE
        	user_id = $user_id
	";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());
}




function GetUser($user_id){

}
function GetUsers(){

}


?>