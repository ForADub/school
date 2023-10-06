<?php

session_start();


$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);


if($data===false){
	die("connection error");
}

if (isset($_POST['add_teacher'])) {
	// code...
	$firstname = $_POST['t_first'];
	$lastname = $_POST['t_last'];
	$dob = $_POST['t_dob'];
	$sub = $_POST['t_sub'];
	$religion = $_POST['t_religion'];
	$nationality = $_POST['t_nationality'];
	$gender = $_POST['t_gender'];
	$address = $_POST['t_address'];
	$phone = $_POST['t_tel'];
	$email = $_POST['t_email'];


	$sql = "INSERT INTO teacher(firstName, lastName, dob, subject, religion, nationality, gender, address, phone, email) VALUES ('$firstname','$lastname','$dob','$sub','$religion','$nationality','$gender','$address','$phone','$email')";

	$result=mysqli_query($data,$sql);

	if ($result) {
		// code...
		//echo "Add student success";
		$_SESSION['message'] = "your application sent successful";

		header("location:dashboard.php");
	}
	else{
		echo "Add student failed";
	}
}


?>