<?php

$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);

$id = $_GET['student_id'];

$update = "SELECT * FROM student WHERE id='$id' ";

$resultss = mysqli_query($data,$update);

$info = $resultss->fetch_assoc();


if(isset($_POST['update'])){
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


	$query = "UPDATE student SET firstName='$firstname',lastName='$lastname', class='$class', dob='$dob', religion='$religion', nationality='$nationality', gender='$gender', address='$address', fatherName='$fathername', motherName='$mothername', fatherTel='$fathertel', motherTel='$mothertel' WHERE id='$id' ";

	$result2= mysqli_query($data,$query);

	if ($result2) {
		// code...
		header("location:dashboard.php");
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sudent Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsiveness.css">
	<link rel="stylesheet" type="text/css" href="file:///E:/desktop/New%20folder/fontawesome-free-6.0.0-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


	<!--Social and email-->
	<div class="fixed">
	<section id="social">
		<div class="tel">
			<a href="#">VICTORIA SCHOOL COMPLEX</a>
			<p>|</p>
			<a href="#">Admin Dashboard</a>
		</div>

		<div class="soc">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>

		<div class="bar-dash">
			<img id="barss" src="menu.png" alt="">
		</div>
	</section>
	</div>



	<!-- update student section -->


		<section id="update-student">
			<h1>UPDATE INFORMATION</h1>
			<div class="admiss">
				<form action="#" method="POST">
					<h2>STUDENT'S INFO</h2>
					<div class="name">
						<div class="p-fname">
							<label>Pupil's FirstName</label>
							<input type="text" name="firstName" value=" <?php echo "{$info['firstName']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Pupil's LastName</label>
							<input type="text"  name="lastName" value=" <?php echo "{$info['lastName']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Class</label>
							<input type="text"  name="class" value=" <?php echo "{$info['class']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Date of Birth</label>
							<input type="date"  name="dob" value=" <?php echo "{$info['dob']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Religion</label>
							<select name="religion" value=" <?php echo "{$info['religion']}"; ?> ">
								<option>Select</option>
								<option>Christian</option>
								<option>Muslim</option>
								<option>Traditionl</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Nationality</label>
							<input type="text"  name="nationality" value=" <?php echo "{$info['nationality']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Gender</label>
							<select name="gender" value=" <?php echo "{$info['gender']}"; ?> ">
								<option hidden>Select</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Residential Address</label>
							<input type="text"  name="address" value=" <?php echo "{$info['address']}"; ?> ">
						</div>
					</div>
				
			</div>
			<div class="admiss">
				
					<h2>Parent's Information</h2>
					<div class="name">
						<div class="p-fname">
							<label>Father's Name</label>
							<input type="text"  name="fatherName" value=" <?php echo "{$info['fatherName']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Mother's Name</label>
							<input type="text"  name="motherName" value=" <?php echo "{$info['motherName']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Father's Telephone</label>
							<input type="text" name="fatherTel" value=" <?php echo "{$info['fatherTel']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Mother's Telephone</label>
							<input type="text"  name="motherTel" value=" <?php echo "{$info['motherTel']}"; ?> ">
						</div>
					</div>
					<input type="submit" class="sub" name="update" value="Update">
				</form>
			</div>
		</section>

<!-- end of update student section -->

</body>
</html>