<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "my_db";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$age = $_GET['age'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
	// Escape User Input to help prevent SQL Injection
$age = mysql_real_escape_string($age);
$fname = mysql_real_escape_string($fname);
$lname = mysql_real_escape_string($lname);
	//build query
//alert('hello');
$query = "INSERT INTO table1 VALUES ('$fname','$lname','$age')";
	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	
echo "First name, Last name and age are : $fname   $lname   $age";
?>