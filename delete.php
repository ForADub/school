<?php



$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);


if($_GET['student_id']){
	$user_id = $_GET['student_id'];

	$sql = "DELETE FROM student WHERE id='$user_id'  ";

	$result = mysqli_query($data, $sql);


	if($result){
		// $_SESSION['messagep'] = 'Delete Student Data is Successful';
		header("location:dashboard.php");
	}
}



?>