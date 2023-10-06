
<?php

$host="localhost";

$user="root";

$password="";

$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM student";

$result = mysqli_query($data,$sql);




$tea = "SELECT * FROM teacher";

$results = mysqli_query($data,$tea);









error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){

	$message = $_SESSION['message'];

	echo "<script type='text/javascript'>
	alert('$message');

	</script>";
}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VISCO Dashboard</title>
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
	<!--Navigation section-->
	<section id="dash-nav">
		<div class="dash-nav-container">
			<i id="closes" class="fa fa-times"></i>
			<div class="dash-logo">
				<img src="VICTORIA'S BADGE.jpg">
			</div>
			<div class="dash-profile">
				<h2>Profile</h2>
				<ul>
					<li><a class="v-pupil" href="#">View Pupil</a></li>
					<li><a class="v-teacher" href="#">View Teachers</a></li>
				</ul>
			</div>
			<!-- <div class="dash-profile">
				<h2>Alter</h2>
				<ul>
					<li><a class="update-d" href="#">Update Data</a></li>
					<li><a class="delete-d" href="#">Delete Data</a></li>
				</ul>
			</div> -->
			<div class="dash-profile">
				<h2>Registration</h2>
				<ul>
					<li><a class="a-pupil" href="#">Add new student</a></li>
					<li><a class="a-teacher" href="#">Add new teacher</a></li>
				</ul>
			</div>
			<div class="log-out">
				<a href="logout.php">LOGOUT</a>
			</div>
		</div>
	</section>
	<!--End of navigation section-->



	<!--dashboard content-->
	
	<section class="dash-content">

<!-- Overview of dashboard -->

		<!-- <section id="pupil-info">
			<h1>Admin </br>Dashboard</h1>
			<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.<br/>
			Click on both to understand how they differ from each other. the accordion will push down the content, while the dropdown lays over the content.lll</p>
			<div class="links">
				<a class="v-pupil" href="#">View All Pupil</a>
				<a class="v-teacher" href="#">View All Teachers</a>
				<a class="a-pupil" href="#">Add New Student</a>
				<a class="a-teacher" href="#">Add New Teacher</a>
				<a href="#">Update Student</a>
				<a href="#">Update Teacher</a>
				<a href="#">Delete Student</a>
				<a href="#">Delete Teacher</a>
			</div>
		</section> -->

<!-- End of overview of dashboard section -->


<!-- view pupil -->

		
		<section id="view-pupil">
			<h1>PUPILS IN THE SCHOOL</h1>
			<div class="table">
				<table>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Class</th>
						<th>Delete</th>
						<th>Update</th>
					</tr>

					<?php

						while($info=$result->fetch_assoc())
						{

					?>
					<tr>
						<td><?php echo "{$info['firstName']}" ?></td>
						<td><?php echo "{$info['lastName']}" ?></td>
						<td><?php echo "{$info['class']}" ?></td>
						<td><?php echo "<a onClick=\" javascript:return confirm('Are You Sure to Delete this') \" 
						href='delete.php?student_id={$info['id']}'>Delete</a>"; ?></td>
						<td><?php echo "<a class='updates' href='update-student.php?student_id={$info['id']}'>Update </a>"; ?></td>
					</tr>

					<?php

						}
					?>	
				</table>
				
			</div>
		</section>


<!-- End of view pipul section -->







<!-- view teacher -->

		
		<section id="view-teacher">
			<h1>TEACHER'S IN THE SCHOOL</h1>
			<div class="table">
				<table>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Class/Sub</th>
						<th>Delete</th>
						<th>Update</th>
					</tr>

					<?php

						while($info=$results->fetch_assoc())
						{

					?>

					<tr>
						<td><?php echo "{$info['firstName']}" ?></td>
						<td><?php echo "{$info['lastName']}" ?></td>
						<td><?php echo "{$info['subject']}" ?></td>
						<td><?php echo "<a onClick=\" javascript:return confirm('Are You Sure to Delete this') \" 
						href='deletet.php?teacher_id={$info['id']}'>Delete</a>"; ?></td>
						<td><?php echo "<a class='updates' href='update-teacher.php?teacher_id={$info['id']}'>Update </a>"; ?></td>
					</tr>

					<?php

						}
					?>

				</table>
				
			</div>
		</section>


<!-- End of view teacher section -->

<!-- add new student section -->


		<section id="add-student">
			<h1>REGISTRATION</h1>
			<div class="admiss">
				<form action="data-check.php" method="POST">
					<h2>ADD NEW STUDENT</h2>
					<div class="name">
						<div class="p-fname">
							<label>Pupil's FirstName</label>
							<input type="text" placeholder="Firstname" name="firstName">
						</div>
						<div class="p-fname">
							<label>Pupil's LastName</label>
							<input type="text" placeholder="Lastname" name="lastName">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Class</label>
							<input type="text" placeholder="Class" name="class">
						</div>
						<div class="p-fname">
							<label>Date of Birth</label>
							<input type="date" placeholder="Date of Birth" name="dob">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Religion</label>
							<select name="religion">
								<option hidden>Select</option>
								<option>Christian</option>
								<option>Muslim</option>
								<option>Traditionl</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Nationality</label>
							<input type="text" placeholder="Nationality" name="nationality">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Gender</label>
							<select name="gender">
								<option hidden>Select</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Residential Address</label>
							<input type="text" placeholder="Location" name="address">
						</div>
					</div>
				
			</div>
			<div class="admiss">
				
					<h2>Parent's Information</h2>
					<div class="name">
						<div class="p-fname">
							<label>Father's Name</label>
							<input type="text" placeholder="Father's Name" name="fatherName">
						</div>
						<div class="p-fname">
							<label>Mother's Name</label>
							<input type="text" placeholder="Mother's Name" name="motherName">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Father's Telephone</label>
							<input type="text" placeholder="Phone Number" name="fatherTel">
						</div>
						<div class="p-fname">
							<label>Mother's Telephone</label>
							<input type="text" placeholder="Phone Number" name="motherTel">
						</div>
					</div>
					<input type="submit" class="sub" name="add_student" value="Submit">
				</form>
				
			</div>
		</section>

<!-- end of add new student section -->

<!-- add new teacher section -->

		<section id="add-teacher">
			<h1>REGISTRATION</h1>
			<div class="admiss">
				<form action="teacher-check.php" method="POST">
					<h2>ADD NEW TEACHER</h2>
					<div class="name">
						<div class="p-fname">
							<label>Teacher's FirstName</label>
							<input type="text" placeholder="Firstname" name="t_first">
						</div>
						<div class="p-fname">
							<label>Teacher's LastName</label>
							<input type="text" placeholder="Lastname" name="t_last">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Date of Birth</label>
							<input type="date" placeholder="Date of Birth" name="t_dob">
						</div>
						<div class="p-fname">
							<label>Subject/Class</label>
							<input type="text" placeholder="Subject/Class" name="t_sub">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Religion</label>
							<select name="t_religion">
								<option hidden>Select</option>
								<option>Christian</option>
								<option>Muslim</option>
								<option>Traditionl</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Nationality</label>
							<input type="text" placeholder="Nationality" name="t_nationality">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Gender</label>
							<select name="t_gender">
								<option hidden>Select</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
						<div class="p-fname">
							<label>Residential Address</label>
							<input type="text" placeholder="Location" name="t_address">
						</div>
					</div>
					<div class="name">
						<div class="p-fname">
							<label>Teacher's Telephone</label>
							<input type="text" placeholder="Phone Number" name="t_tel">
						</div>
						<div class="p-fname">
							<label>Teacher's Email</label>
							<input type="text" placeholder="Email" name="t_email">
						</div>
					</div>
					<input type="submit" class="sub" value="Submit" name="add_teacher">
				</form>
				
			</div>
		</section>

<!-- end of add new teacher section -->


	</section>

	<!--End of dashboard content-->


	<!-- <section id="login-form" class="section-p">
		<div class="log-form">
			<h1>LOGIN ADMIN</h1>
			<div class="form">
				<form>
					<input type="text" placeholder="Username" name="username">
					<input type="password" placeholder="Password" name="password">
					<input type="submit" placeholder="submit" name="submit" class="submit">
				</form>
			</div>
		</div>
	</section> -->


	




	<!--Footer-->
	<!-- <footer id="footer" class="section-p">
		<div class="vic">
			<div class="vic-img">
				<img src="">
				<h3>Victoria School Complex</h3>
			</div>
			<div class="vic-desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolorem cum omnis ipsa consequuntur modi laborum esse voluptatem doloribus odit laboriosam,</p>
			</div>
			<div class="vic-soc">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-youtube"></i>
				<i class="fab fa-facebook"></i>
				<i class="fab fa-facebook"></i>
			</div>
		</div>

		<div class="git">
			<h3>Get In Touch</h3>
			<p>Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.</p>
			<p><i class="fa fa-home"></i>Washington street,<br/> Nyamekye Darkoman</p>
			<p><i class="fa fa-phone"></i>(233) 594187917</p>
			<p><i class="fa fa-email"></i>visco@gmail.com</p>
		</div>

		<div class="ul">
			<h3>Useful Link</h3>
			<a href="#"><i class="fa fa-arrow"></i>About us</a>
			<a href="#"><i class="fa fa-arrow"></i>Gallery</a>
			<a href="#"><i class="fa fa-arrow"></i>Blog</a>
			<a href="#"><i class="fa fa-arrow"></i>Contact us</a>
			<a href="#"><i class="fa fa-arrow"></i>Privacy policy</a>
		</div>

		<div class="oh">
			<h3>Oppening Hours</h3>
			<div class="day">
				<p>Mon</p>
				<p>07:00am-04:00pm</p>
			</div>
			<div class="day">
				<p>Tue</p>
				<p>07:00am-04:00pm</p>
			</div>
			<div class="day">
				<p>Wed</p>
				<p>07:00am-04:00pm</p>
			</div>
			<div class="day">
				<p>Thu</p>
				<p>07:00am-04:00pm</p>
			</div>
			<div class="day">
				<p>Fri</p>
				<p>07:00am-04:00pm</p>
			</div>
		</div>
	</footer> -->
	<!--End of footer-->




	<!-- <section id="copyright">
		<p>Copyright @ Victoria School Complex 2023. All Right Reserved</p>
	</section> -->


<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="dash.js"></script>

</body>
</html>