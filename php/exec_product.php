<?php

include_once("./session.php");


if(isset($_POST["save_product"])){
	
	require_once('./dbcon.php');

	$prod_name = filter_var($_POST["prod_name"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$category_id =filter_var($_POST["category_id"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$prod_buying_price =filter_var($_POST["prod_buying_price"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$prod_selling_price =filter_var($_POST["prod_selling_price"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$prod_quantity =filter_var($_POST["prod_quantity"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$prod_units_of_measure =filter_var($_POST["prod_units_of_measure"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$prod_description =filter_var($_POST["prod_description"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$owner_user_id = $_SESSION['sess_id'];

	$query ="
		INSERT INTO 
			tbl_products(category_id,owner_user_id,prod_name,prod_buying_price,prod_selling_price,prod_quantity,prod_units_of_measure,prod_description)
		VALUES(
			'".$category_id."',
			'".$owner_user_id."',
			'".$prod_name."',
			'".$prod_buying_price."',
			'".$prod_selling_price."',
			'".$prod_quantity."',
			'".$prod_units_of_measure."',
			'".$prod_description."')
	";
	
	$query_exec = mysqli_query($link,$query) or die (mysqli_error());

	header('location: ../dashboard.php');

}else if(isset($_POST["delete_product"])){


}


?>





