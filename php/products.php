<?php


	//CreateProduct(1,1,'Watermelons',500.00,600.00,100,"Per Water Melon","This is a demonstration text");
	// UpdateProduct(2,12,12,'Watermelonx',5001.00,6001.00,1100,"xPer Water Melon","xThis is a demonstration text");
	// DeleteProduct(1);

	CreateProduct(1,1,'Watermelons',500.00,600.00,100,"Per Water Melon","This is a demonstration text");

	//print_r(GetProduct(1));

function CreateProduct($category_id,$owner_user_id,$prod_name,$prod_buying_price,$prod_selling_price,$prod_quantity,$prod_units_of_measure,$prod_description){
	
	require_once('./dbcon.php');
	
	$query ="
		INSERT INTO tbl_products(category_id,owner_user_id,prod_name,prod_buying_price,prod_selling_price,prod_quantity,prod_units_of_measure,prod_description) VALUES( '1', '6', 'qwqw', '1221', '212122', '12', '12', 'DESCRIPTION')
	";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());
}

function UpdateProduct($product_id,$category_id,$owner_user_id,$prod_name,$prod_buying_price,$prod_selling_price,$prod_quantity,$prod_units_of_measure,$prod_description){

	require_once('./dbcon.php');

	// update query
    $query = 
    		"UPDATE
    			tbl_products
            SET
				category_id = '".$category_id."',
				owner_user_id = '".$owner_user_id."',
				prod_name = '".$prod_name."',
				prod_buying_price = '".$prod_buying_price."',
				prod_selling_price = '".$prod_selling_price."',
				prod_quantity = '".$prod_quantity."',
				prod_units_of_measure = '".$prod_units_of_measure."',
				prod_description = '".$prod_description."'
            WHERE
                product_id = '".$product_id."'";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());

}


function DeleteProduct($product_id){
	require_once('./dbcon.php');

	$query = "
		DELETE FROM 
    		tbl_products
        WHERE
        	product_id = '".$product_id."'
	";
	// die($query);
	$query_exec = mysqli_query($link,$query) or die (mysqli_error());

}


function GetProduct($product_id){
	require_once('./dbcon.php');

	$query="
		SELECT * FROM tbl_products WHERE product_id =$product_id
	";

	$result = mysqli_query($link,$query) or die(mysqli_error());

	$product = array();

	$row=mysqli_fetch_array($result);

	array_push($products,$row);

	return $product;

}


function GetProducts(){
	require_once('./dbcon.php');

	$query="
		SELECT * FROM tbl_products
	";

	$result = mysqli_query($link,$query) or die(mysqli_error());

	$products = array();

	while($row=mysqli_fetch_array($result)){
		 array_push($products, $row);
	}

	return $products;

}


?>