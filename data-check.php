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

if (isset($_POST['add_student'])) {
	// code...
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$class = $_POST['class'];
	$dob = $_POST['dob'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$fathername = $_POST['fatherName'];
	$mothername = $_POST['motherName'];
	$fathertel = $_POST['fatherTel'];
	$mothertel = $_POST['motherTel'];


	$sql = "INSERT INTO student(firstName, lastName, class, dob, religion, nationality, gender, address, fatherName, motherName, fatherTel, motherTel) VALUES ('$firstname','$lastname','$class','$dob','$religion','$nationality','$gender','$address','$fathername','$mothername','$fathertel','$mothertel')";

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