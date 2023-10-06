<?php

$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);

$id = $_GET['teacher_id'];

$update = "SELECT * FROM teacher WHERE id='$id' ";

$resultss = mysqli_query($data,$update);

$info = $resultss->fetch_assoc();


if(isset($_POST['update'])){
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


	$query = "UPDATE teacher SET firstName='$firstname',lastName='$lastname', dob='$dob', subject='$sub', religion='$religion', nationality='$nationality', gender='$gender', address='$address', email='$email' WHERE id='$id' ";

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



	<!-- update teacher section -->

		<section id="update-teacher">
			<h1>UPDATE INFORMATION</h1>
			<div class="admiss">
				<form action="#" method="POST">
					<h2>TEACHER'S INFO</h2>
					<div class="name">
						<div class="p-fname">
							<label>Teacher's FirstName</label>
							<input type="text" placeholder="Firstname" name="t_first" value=" <?php echo "{$info['firstName']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Teacher's LastName</label>
							<input type="text" placeholder="Lastname" name="t_last" value=" <?php echo "{$info['lastName']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Date of Birth</label>
							<input type="date" placeholder="Date of Birth" name="t_dob" value=" <?php echo "{$info['dob']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Subject/Class</label>
							<input type="text" placeholder="subject" name="t_sub" value=" <?php echo "{$info['subject']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Religion</label>
							<select name="t_religion" value=" <?php echo "{$info['religion']}"; ?> ">
								<option hidden>Select</option>
								<option>Christian</option>
								<option>Muslim</option>
								<option>Traditionl</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Nationality</label>
							<input type="text" placeholder="Nationality" name="t_nationality" value=" <?php echo "{$info['nationality']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Gender</label>
							<select name="t_gender" value=" <?php echo "{$info['gender']}"; ?> ">
								<option hidden>Select</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Residential Address</label>
							<input type="text" placeholder="Location" name="t_address" value=" <?php echo "{$info['address']}"; ?> ">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Teacher's Telephone</label>
							<input type="text" placeholder="Phone Number" name="t_tel" value=" <?php echo "{$info['phone']}"; ?> ">
						</div>
						<div class="p-fname">
							<label>Teacher's Email</label>
							<input type="text" placeholder="Email" name="t_email" value=" <?php echo "{$info['email']}"; ?> ">
						</div>
					</div>
					<input type="submit" class="sub" value="Update" name="update">
				</form>
				
			</div>
		</section>

<!-- end of update teacher section -->

</body>
</html>