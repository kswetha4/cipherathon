<?php
/*database_name: hackathon
 TABLE_NAME: rsvp
 inser query*/
session_start();
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'hackathon');
		// storing values into sessins
	if(isset($_POST['tName'])){
		$_SESSION['tName']=$_POST['tName'];
		$tName=$_SESSION['tName'];
	}

	if(isset($_POST['team'])){
		$team=$_POST['team'];
		$_SESSION['team']=$team;
	}
			
	if(isset($_POST['m1'])){
		$m1=$_POST['m1'];
		$_SESSION['m1']=$m1;
	}
			
	if(isset($_POST['email1'])){
		$email1=$_POST['email1'];
		$_SESSION['email1']=$email1;
	}
	
	if(isset($_POST['contact1'])){
		$contact1=$_POST['contact1'];
		$_SESSION['contact1']=$contact1;
	}

	if(isset($_POST['m2'])){
		$m2=$_POST['m2'];
		$_SESSION['m2']=$m2;
	}
			
	if(isset($_POST['email2'])){
		$email2=$_POST['email2'];
		$_SESSION['email2']=$email2;
	}
	
	if(isset($_POST['contact2'])){
		$contact2=$_POST['contact2'];
		$_SESSION['contact2']=$contact2;
	}

	if(isset($_POST['m3'])){
		$m3=$_POST['m3'];
		$_SESSION['m3']=$m3;
	}
			
	if(isset($_POST['email3'])){
		$email3=$_POST['email3'];
		$_SESSION['email3']=$email3;
	}
	
	if(isset($_POST['contact3'])){
		$contact3=$_POST['contact3'];
		$_SESSION['contact3']=$contact3;
	}
	if(isset($_POST['m4'])){
		$m4=$_POST['m4'];
		$_SESSION['m4']=$m4;
	}
			
	if(isset($_POST['email4'])){
		$email4=$_POST['email4'];
		$_SESSION['email4']=$email4;
	}
	
	if(isset($_POST['contact4'])){
		$contact4=$_POST['contact4'];
		$_SESSION['contact4']=$contact4;
	}
	if(isset($_POST['coupon_code'])){
		$coupon_code=$_POST['coupon_code'];
		$_SESSION['coupon_code']=$coupon_code;
		$coupon_code=$_SESSION['coupon_code'];
	}			
		// checking is the submit button is clicked	 or not	
		if(isset($_POST['submit']))
		{
			//checking whether user already existing or not
			$query="SELECT * FROM rsvp WHERE team_name='$tName'";
			$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)){
					echo '<script type="text/javascript">alert("team name already exits")</script>';
					echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
				}
				else if(isset($_POST['coupon_code']))
				{   				
						$coupon_code=$_POST['coupon_code'];
						$_SESSION['coupon_code']=$coupon_code;
						$coupon_code=$_SESSION['coupon_code'];
					$sql="SELECT sponse_code FROM sponser WHERE sponse_code='$coupon_code'";	
					$res=mysqli_query($con,$sql);
						if(mysqli_num_rows($res)>0){
							$sql="INSERT INTO rsvp VALUES('$tName','$team','$m1','$email1','$contact1','$m2','$email2','$contact2','$m3','$email3','$contact3','$m4','$email4','$contact4','$coupon_code')";
							$res=mysqli_query($con,$sql);			
							if($res)
							{
								echo "<script>alert('your details has been submited')</script>";
								echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
							}
							}
							else {
										echo "<script>alert(' Invalid coupon code please Re-enter ')</script>";
										echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";				
							}
				}
				else {
					$sql="INSERT INTO rsvp VALUES('$tName','$team','$m1','$email1','$contact1','$m2','$email2','$contact2','$m3','$email3','$contact3','$m4','$email4','$contact4','')";
							$res=mysqli_query($con,$sql);			
							if($res)
							{
								echo "<script>alert('your details has been submited')</script>";
								echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
							}
				}	
		}
	
		// CODE FOR CLOSE BUTTON
		if(isset($_POST['close']))
		{
		// GOES TO rsvp button page
			header("Loction:index.php");
		}        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/icon.png" type="image/jpeg" />
	<title>Cipherathon - A Cyber Security Hackathon</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/imagehover.min.css">

</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">

				<a class="navbar-brand page-scroll" href="#page-top">
					<!-- <img src="images/logo.png" alt="Sanza theme logo"> -->
					<h3>Cipherathon</h3>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!-- Header -->
	<header style="margin-top: 0 !important;">

		<div class="hero-image">
			<div class="hero-text">
				<h1 style="font-size:60px; color: #fff; font-family:viner hand ITC">Cipherathon</h1>
				<p style="font-size: 20px; letter-spacing: 10px; color: #fff">A Cyber Security Hackathon</p>

			</div>
		</div>
		<!--Banner ends-->
	</header>

	<section class="section-cta">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12" style="text-align:center">
					<h2>Hurry!! Registrations are open now</h2>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12" style="text-align:center">
					<a class="button-cta" data-toggle="modal" data-target="#myModal">RSVP</a>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" style="text-align:center">
					<div class="section-title">
						<h2>Presented BY</h2>
						<div class="col-lg-12 col-md-offset-4" style="align-items:center; text-align:center">
							<img src="images/rex.png" alt="Rex Cyber Solutions" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title" style="text-align:center">
						<h2>Organizing and Strategy Partner</h2>
						<div class="col-lg-12 col-md-offset-4" style="align-items:center; text-align:center">
							<img src="images/famelogo.png" alt="Rex Cyber Solutions" class="img-responsive" style="height:120px">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<section id="features" class="section-features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Agenda</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 style="text-align:center; font-weight:bolder">Coming Soon..</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio" class="light-bg">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row" style="text-align: center;">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Judges/Mentors</h2>
				</div>

				<p style="text-align: center;"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ea ipsa, veniam doloribus fugiat nulla error ipsam similique
					labore quae velit blanditiis cum harum enim asperiores voluptates hic officiis atque dolore, perferendis ipsum voluptatem
					tempore sapiente voluptatum! Excepturi, ratione labore!.
				</p>

				<div class="col-md-3" style="padding-left: 24px; ">
					<?php 
					$sql="SELECT * FROM judge_images WHERE id=1";
					$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($res)){						
							echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners" style="border-radius: 50%; margin-top: 40px; height:210px; width: 210px; object-fit:cover">';	
					echo '<h3 style="text-align: center;">'.$row['name'].'</h3>';
					echo '<h5>'.$row['designation'].'</h5>';
				}?>
				</div>

				<div class="col-md-3">
					<?php 
					$sql="SELECT * FROM judge_images WHERE id=2";
					$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($res)){						
							echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners" style="border-radius: 50%; margin-top: 40px; height:210px; width: 210px; object-fit:cover">';	
					echo '<h3 style="text-align: center;">'.$row['name'].'</h3>';
					echo '<h5>'.$row['designation'].'</h5>';
				}?>
				</div>

				<div class="col-md-3">
					<?php 
					$sql="SELECT * FROM judge_images WHERE id=3";
					$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($res)){						
							echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners" style="border-radius: 50%; margin-top: 40px; height:210px; width: 210px; object-fit:cover">';	
					echo '<h3 style="text-align: center;">'.$row['name'].'</h3>';
					echo '<h5>'.$row['designation'].'</h5>';
				}?>
				</div>

				<div class="col-md-3 ">
					<?php 
					$sql="SELECT * FROM judge_images WHERE id=4";
					$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($res)){						
							echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners" style="border-radius: 50%; margin-top: 40px; height:210px; width: 210px; object-fit:cover">';	
					echo '<h3 style="text-align: center;">'.$row['name'].'</h3>';
					echo '<h5>'.$row['designation'].'</h5>';
				}?>
				</div>
			</div>
		</div>
	</section>

	<section class="dark-bg short-section stats-bar" style="padding-top:30px; padding-bottom:30px;">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-4 mb-sm-30" style="margin-bottom:10px;">
					<div class="counter-item">
						<a href="https://www.facebook.com/cipherathon" target="_blank">
							<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
						</a>

					</div>
				</div>
				<div class="col-md-4 mb-sm-30" style="margin-bottom:10px;">
					<div class="counter-item">
						<a href="https://twitter.com/cipherathon" target="_blank">
							<i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4 mb-sm-30" style="margin-bottom:10px;">
					<div class="counter-item">
						<a href="https://www.instagram.com/cipherathon/" target="_blank">
							<i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Our Partners</h2>
						<h3 style="text-align:center; font-weight:bolder">Coming Soon..</h3>
						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="owl-partners owl-carousel">
									<div class="item">
										<div class="partner-logo">
											<?php 
													$sql="SELECT * FROM partners_image WHERE id=1";
													$res=mysqli_query($con,$sql);
												while($row=mysqli_fetch_assoc($res)){						
													echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>
									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=2";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>

									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=3";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>
									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=4";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>

									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=5";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>
									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=6";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>
									<div class="item">
										<div class="partner-logo">
											<?php 
												$sql="SELECT * FROM partners_image WHERE id=7";
												$res=mysqli_query($con,$sql);
													while($row=mysqli_fetch_assoc($res)){						
												echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="partners">';
											}?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>

	<section id="team" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Our Team</h2>
						<h3 style="text-align:center; font-weight:bolder">Coming Soon..</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="images/demo/author-2.jpg" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Name</h3>
							<div class="team-position">Designation</div>

						</div>
					</div>
				</div>
				<!-- end team member item -->
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="images/demo/author-2.jpg" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Name</h3>
							<div class="team-position">Designation</div>
							<!-- <p>Worsa dona namet, cons uectetur dipiscing adon elit. Aliquam vitae fringilla unda mir.</p> -->

						</div>
					</div>
				</div>
				<!-- end team member item -->
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="images/demo/author-2.jpg" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Name</h3>
							<div class="team-position">Designation</div>
							<!-- <p>Dolor sit don namet, cons uectetur beriscing adon elit. Aliquam vitae fringilla unda.</p> -->

						</div>
					</div>
				</div>
				<!-- end team member item -->
			</div>
		</div>
	</section>

	<section class="section-cta">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12" style="text-align:center">
					<h2>Hurry!! Registrations are open now</h2>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12" style="text-align:center">
					<a class="button-cta" data-toggle="modal" data-target="#myModal">RSVP</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Contact Us</h2>
						<p style="margin: 0 0 30px 0;">If you have some Questions or need Help! Please Contact Us!</p>
					</div>
				</div>
			</div>
			<div class="row" style="text-align:center; margin-bottom:10px;">
				<div class="col-md-3">
					<div class="section-text">
						<h4>Contact Person</h4>
						<p>Joel Charles</p>
						<p>
							<i class="fa fa-phone"></i> +91 8971455317</p>
						<p>
							<i class="fa fa-envelope"></i> joel.charles@fametronix.in</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-text">
						<h4>Venue</h4>
						<h3>Coming Soon..</h3>
					</div>
				</div>
				<div class="col-md-6">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.955430545317!2d77.6332840143634!3d12.97470251832179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a15b671555%3A0x947466bc0e21efb2!2s1300%2C+13th+Cross+Rd%2C+Indiranagar%2C+Bengaluru%2C+Karnataka+560038!5e0!3m2!1sen!2sin!4v1536483581314"
					 width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
			</div>
		</div>
	</section>
	<p id="back-top">
		<a href="#top">
			<i class="fa fa-angle-up"></i>
		</a>
	</p>
	<footer>
		<div class="container text-center">
			<p>Copyright &copy;
				<a href="http://cipherathon.com">
					<span>cipherathon</span>.com</a>
			</p>
		</div>
	</footer>


	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel" style="text-align:center">RSVP</h4>
					<sub style="color:red">* are compulsory fields</sub>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<form action="index.php" method="POST">
									<div class="form-group">
										<label for="tName">Team Name
											<sup style="color:red">*</sup>
										</label>
										<input type="text" class="form-control" id="tName" name="tName" placeholder="Team Name" required>
									</div>
									<div class="form-group">
										<label for="team">What describes your team best?
											<sup style="color:red">*</sup>
										</label>
										<select id="team" name="team" class="form-control">
											<option id="student" value="student">Student</option>
											<option id="developer" value="developer">Developer</option>
											<option id="Freelancers" value="freelancers">Freelancer</option>
											<option id="others" value="others">Others</option>

										</select>
									</div>
									<hr>
									<label for="member details">Member Details</label>
									<hr>
									<label for="member1">Member 1</label>
									<hr>
									<div class="form-group">
										<label for="m1">Name
											<sup style="color:red">*</sup>
										</label>
										<input type="text" class="form-control" id="m1" name="m1" placeholder="Enter Name" required>
									</div>
									<div class="form-group">
										<label for="email1">Enter Email
											<sup style="color:red">*</sup>
										</label>
										<input type="email" class="form-control" id="email1" name="email1" placeholder="Enter EMail" required>
									</div>
									<div class="form-group">
										<label for="contact1">Contact Number
											<sup style="color:red">*</sup>
										</label>
										<input type="tel" class="form-control" id="contact1" name="contact1" placeholder="Enter Contact Number" required>
									</div>
									<hr>
									<label for="member1">Member 2</label>
									<hr>
									<div class="form-group">
										<label for="m2">Name</label>
										<input type="text" class="form-control" id="m2" name="m2" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label for="email2">Enter Email</label>
										<input type="email" class="form-control" id="email2" name="email2" placeholder="Enter EMail">
									</div>
									<div class="form-group">
										<label for="contact2">Contact Number</label>
										<input type="tel" class="form-control" id="contact2" name="contact2" placeholder="Enter Contact Number">
									</div>
									<hr>
									<label for="member3">Member 3</label>
									<hr>
									<div class="form-group">
										<label for="m3">Name</label>
										<input type="text" class="form-control" id="m3" name="m3" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label for="email3">Enter Email</label>
										<input type="email" class="form-control" id="email3" name="email3" placeholder="Enter EMail">
									</div>
									<div class="form-group">
										<label for="contact3">Contact Number</label>
										<input type="tel" class="form-control" id="contact3" name="contact3" placeholder="Enter Contact Number">
									</div>
									<hr>
									<label for="member4">Member 4</label>
									<hr>
									<div class="form-group">
										<label for="m4">Name</label>
										<input type="text" class="form-control" id="m4" name="m4" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label for="email4">Enter Email</label>
										<input type="email" class="form-control" id="email4" name="email4" placeholder="Enter EMail">
									</div>
									<div class="form-group">
										<label for="contact4">Contact Number</label>
										<input type="tel" class="form-control" id="contact4" name="contact4" placeholder="Enter Contact Number">
									</div>
									<div class="form-group">
										<label for="contact4">Enter Coupon Code</label>
										<input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter coupon code">
									</div>
									<hr>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
										<button type="submit" class="btn btn-default" name="submit">Submit</button>
										<!-- <button type="submit" class="btn btn-default" name="coupon">Apply Code</button> -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- End Of Modal -->

	<!-- Bootstrap core JavaScript
			================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/theme-scripts.js"></script>
</body>

</html>