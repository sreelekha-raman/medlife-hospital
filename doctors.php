<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="public/img/favicon.png" type="image/png">
	<title>Doctors</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
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
									
									<li class="nav-item active">
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
					<h2>Consultants</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="doctors.html">Consultants</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!-- Start team Area -->
	<section class="team-area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>MEET OUR DOCTORS </h1>
					<p>
						
					</p>
				</div>
			</div>

			<div class="row justify-content-center d-flex align-items-center">
				
<?php
include("admin/model/dboperation.php");
$sql = "SELECT * FROM doctor_details";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
	
						<!--<img class="img-fluid" src="public/img/t1.jpg" alt="">-->
						<img src = "admin/doctor/<?php echo $row['img'];?>" alt="" class="img-fluid"></a>

						<div class="align-items-end justify-content-center d-flex">
							

							<p>
								<?php echo $row['designation'];?>
							</p>
							<h4><?php echo $row['doctor_name'];?></h4>
						</div>
					</div>
				</div>
<?php
}
}
?>				
				
				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team">
					<div class="thumb">

					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team">
					<div class="thumb">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team">
					<div class="thumb">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-team">
					<div class="thumb">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End team Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
		

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