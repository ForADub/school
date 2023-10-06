<?php

error_reporting(0);


$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);


if($data===false){
	die("connection error");
}



if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST['username'];
	$pass = $_POST['password'];


	$sql="select * from admin where username= '".$name."' AND password='".$pass."' ";


	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);


	/*if($row["usertype"] == "admins"){
		header("location:dashboard.php");
	}
	elseif ($row["usertype"] == "student") {
		header("location:student.php");
	}
	else{
		echo "username or password do not match";
	}*/

	if(mysqli_num_rows($result) == true){
		header("location:dashboard.php");
	}
	else{
		session_start();
		$message="username and password invalid";
		$_SESSION['loginMessage']=$message;
		header("location:login.php");
	}


}


?>