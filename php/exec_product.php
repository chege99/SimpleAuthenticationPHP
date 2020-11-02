<?php

if(isset($_POST['save_product'])){
	//Need Variable to show if i am editing or creating
// die("here");
	$prod_name = $_POST['prod_name'];//filter_var($_POST['prod_name'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$category_id = $_POST['category_id'];//filter_var($_POST['category_id'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$prod_buying_price = $_POST['prod_buying_price'];//filter_var($_POST['prod_buying_price'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$prod_selling_price = $_POST['prod_selling_price'];//filter_var($_POST['prod_selling_price'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$prod_quantity = $_POST['prod_quantity'];//filter_var($_POST['prod_quantity'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$prod_units_of_measure = $_POST['prod_units_of_measure'];//filter_var($_POST['prod_units_of_measure'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
	$prod_description = $_POST['prod_description'];//filter_var($_POST['prod_description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 

	$prod_name."<br>";
	$category_id."<br>";
	$prod_buying_price."<br>";
	$prod_selling_price."<br>";
	$prod_quantity."<br>";
	$prod_units_of_measure."<br>";
	$prod_description."<br>";
}


?>





