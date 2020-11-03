<?php
//category_id,category	

// CreateCategory("Solid");
//DeleteCategory(1);
// UpdateCategory(1,'Liquid');

function CreateCategory($category){
	require_once('./dbcon.php');
	
	$query ="
		INSERT INTO 
			tbl_categories(category)
		VALUES(
			'".$category."'
		)
	";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());
}

function UpdateCategory($category_id,$category){
	
	require_once('./dbcon.php');
	// update query
    $query = 
    		"UPDATE
    			tbl_categories
            SET				
				category = '".$category."'
            WHERE
                category_id = '".$category_id."'";


	$query_exec = mysqli_query($link,$query) or die (mysqli_error());
}

function DeleteCategory($category_id){
	require_once('./dbcon.php');

	$query = "
		DELETE FROM 
			tbl_categories
        WHERE
        	category_id = $category_id
	";

	$query_exec = mysqli_query($link,$query) or die (mysqli_error());
}


function GetCategory($category_id){

}
function GetCategories(){

}
?>