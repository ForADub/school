



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VISCO Hompage</title>
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
			<a href="index.html">VICTORIA SCHOOL COMPLEX</a>
			<p>|</p>
			<a href="#">visco@gmail.com</a>
		</div>

		<div class="soc">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</section>

	</div>
	<!--Navigation section-->
	<section id="back-home">
		<button><a href="index.html">Back</a></button>
	</section>
	<!--End of navigation section-->



	<!--Banner section-->
	
	<!--End of banner section-->


	<section id="login-form" class="section-p">
		<div class="log-form">
			<h1>LOGIN ADMIN</h1>
			<h3>
				<?php
					error_reporting(0);
					session_start();
					session_destroy();
					echo $_SESSION['loginMessage'];
				?>
			</h3>
			<div class="form">
				<form method="POST" action="login-check.php">
					<input type="text" placeholder="Username" name="username">
					<input type="password" placeholder="Password" name="password">
					<input type="submit" placeholder="submit" name="submit" value="login">
				</form>
			</div>
		</div>
	</section>


	




	<!--Footer-->
	<footer id="footer" class="section-p">
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
			<a href="about.html"><i class="fa fa-arrow"></i>About us</a>
			<a href="news.html"><i class="fa fa-arrow"></i>News</a>
			<a href="gallery.html"><i class="fa fa-arrow"></i>Gallery</a>
			<a href="admission.html"><i class="fa fa-arrow"></i>Admission</a>
			<a href="contact.html"><i class="fa fa-arrow"></i>Contact us</a>
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
	</footer>
	<!--End of footer-->




	<section id="copyright">
		<p>Copyright @ Victoria School Complex 2023. All Right Reserved</p>
	</section>
<script type="text/javascript" src="script.js"></script>



</body>
</html>