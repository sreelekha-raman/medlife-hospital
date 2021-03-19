<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="public/img/favicon.png" type="image/png">
	<title>About Medlife</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/public/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-public/css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="tel:9876543210">
								<i class="lnr lnr-phone-handset"></i>
								9876543210
							</a>
						</li>
						<li>
							<a href="mailto:www.medlife@co.in">
								<i class="lnr lnr-envelope"></i>
								www.medlife@co.in
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<h1 ><a class="nav-link"  href="index.html">Medlife</a></h1>
					<!--<h2 class=" " >-->
						<!--<img src="public/img/logo.png" alt="">-->
					<!--</a>-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item">
										<a class="nav-link" href="index.html">Home</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="doctors.php">Doctors</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="about.php">About us</a>
									</li>
									
											
									<li class="nav-item">
										<a class="nav-link" href="services.html">Services</a>
									</li>
											
									
									
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-left">
					<h2>About Us</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="about.html">About</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!-- Start Appointment Area -->
	<section class="appointment-area">
		<div class="container">
			<div class="row justify-content-between align-items-center appointment-wrap">
				<div class="col-lg-5 col-md-6 appointment-left">
					<h1>
						Servicing Hours
					</h1>
					<p>
						We provide our bestest service to satisfy our customers.
					</p>
					<ul class="time-list">
						<li class="d-flex justify-content-between">
							<span>Monday-Friday</span>
							<span>08.00 am - 10.00 pm</span>
						</li>
						<li class="d-flex justify-content-between">
							<span>Saturday</span>
							<span>08.00 am - 6.00 pm</span>
						</li>
						<li class="d-flex justify-content-between">
							<span>Sunday</span>
							<span>10.00 am - 6.00 pm</span>
						</li>
					</ul>
					<form action="admin/patient_login.php" method="POST" class="form-wrap" >
					<div class="text-center">
								<button class="main_btn text-uppercase">Patient Log in</button>
					</div>
					</form>
				</div>
				<div class="col-lg-6 col-md-6 pt-60 pb-60">
					<div class="appointment-right">
						<form action="admin/controller/patient_booking.php" method="POST" class="form-wrap" >
<?php if(isset($_GET['msg'])){echo"<h5 style='text-align:center; color:blue;'>Your Booking is Confirmed!..</h5>";}?>		
							<h3 class="pb-20 text-center mb-20">Book an Appointment(Sign in Form)</h3>
							<input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'">
							<input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'">
							<input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
							<input type="password" class="form-control" name="password" placeholder="Password " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							<input id="datepicker1" name="dop" class="dates form-control" placeholder="Date of Birth" type="text">
							<div class="form-select" id="service-select">

								<select name="doctor">
<?php
include("admin/model/dboperation.php");
$sql = "SELECT * FROM doctor_details";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>	
									
									<option value="<?php echo $row['doctor_name'];?>"><?php echo $row['doctor_name'];?></option>
<?php
}
}
?>
								</select>

							</div>
							<input id="datepicker2" name="appointment_date" class="dates form-control" placeholder="appointment Date" type="text">
							<textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
							<div class="text-center">
								<button class="main_btn text-uppercase">Confirm Booking</button>
							</div>
					
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment Area -->

	<!--================ About Myself Area =================-->
	<section class="about_myself section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pr-0">
					<div class="about_img">
						<img class="img-fluid w-100" src="public/img/download.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-6 pl-0">
					<div class="about_box">
						<div class="section-title-wrap text-left">
							<h1>About Us</h1>
							<p>
								<b>“Your health, Our priority”</b>

								<p>Medlife is one of the most advanced tertiary care centre in South India. We are committed to provide world class patient care by blending the concepts of a care path model based on evidence guidelines along with the benefits of modern technology.

								At Medlife, we understand the importance of early detection and timely treatment, which is why we combine world-class medical care with preventive health check-ups to endorse your healthy living.

								Keep track of your health without disrupting your daily schedule</p>
							</p>
						</div>
						<div class="activity">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									
								</div>

								<div class="col-lg-6 col-md-6">
									
								</div>
								<div class="col-lg-6 col-md-6">
									
								</div>
								<div class="col-lg-6 col-md-6">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Myself Area =================-->

	<!-- Start Feedback Area -->
	<section class="feedback_area section_gap relative">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Enjoy our Client’s Feedback</h1>
					<p>
						
					</p>
				</div>
			</div>

			<div class="feedback_contents justify-content-center align-items-center">
				<div class="active-review-carusel owl-carousel">
					<div class="row">
						<div class="col-lg-6">
							<img src="public/img/1.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Arjun Tripathi</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									Medlife is chain of super specialty hospital in India. I enjoyed to work as team leader and part of group. I learn lots of things and improve my practical skills. more over . I increase my knowledge in this field. management was very good and cooperative. The work environment is too good.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="public/img/2.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Preeti Yadav</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
									</div>
								</div>
								<p class="">
									I have a personal experience with this hospital. My father was admitted there 3 yrs back they taken care of him very nicely. They provide physiotherapist for exercisesand also taken care cleanliness. They provide best treatment to the patient. They provide treatment on time. staff of this hospital is very cooperative. They pay proper attention to the suffering of the patient. Give there 100 percent effort to treat the patient.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="public/img/3.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Sidharth Malhotra</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									It's a patient centric hospital and providing the best care for the patient as well as the family with the latest technology and up-to-date knowledge and skill which we acquired from the inservice education. However the salary for the staff nurse is low as compare to the workload. Healthy working environment and the best hospital.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="public/img/4.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Swathi Harish</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star "></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									It's such a clean and best hospital in terms of cure for almost all types of problems I have visited number of times there for myself and also few a types with my friends who need some treatment and by god grace everytime my experience was very good and that is the reason I always prefer to come
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Feedback Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container

			<div class="row footer-bottom d-flex justify-content-between">
				<p>© <span id="year"></span> Medlife. All Rights Reserved | Made by <a href="https://www.linkedin.com/in/sreelekharaman203/"> Sreelekha Raman</a></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/popper.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="vendors/nice-select/public/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="public/js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="public/js/mail-script.js"></script>
	<script src="public/js/custom.js"></script>
<script>
		setYear();
		function setYear() {
			var obj = document.getElementById("year");
			obj.innerHTML = new Date().getFullYear();
		}
	</script>
</body>

</html>