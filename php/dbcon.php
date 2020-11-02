<?php
 
########## MySql details #############
$username = "root"; //mysql username
$password = ""; //mysql password
$hostname = "localhost"; //hostname
$databasename = 'simple_catalog'; //databasename
$sql_error = "Mysql connection is incorrect";

$link = mysqli_connect($hostname,$username,$password)
 or die($sql_error);

//Select database 
$query_db = mysqli_select_db($link, $databasename);

//show error if database was not found
if (!$query_db)
{
  die ("Database was not found");
}
?>