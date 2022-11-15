<?php 
	date_default_timezone_set("asia/dhaka");

	$servername = "localhost";
	$username = "root";
	$password  ="";
	$dbname = "todo_me";

	$con = new mysqli($servername,$username,$password,$dbname);

	if ($con->connect_error) {
		die('Connection Failed: '.$con->connect_error);
	}

	// tables
	$notes_tbl='notes';
	$users_tbl='users';


	// $s = "drop DATABASE learn_todome_db";
	// if($con->query($s)==true){
	// 	echo "Query Success";
	// }else{
	// 	echo "Query Failed: ".$con->error;
	// }


 ?>