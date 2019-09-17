<?php
$data=file_get_contents('data.json');
$porto=json_decode($data, true);

$porto=$porto["porto"];
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Ammar Projects</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/ionicons.css" rel="stylesheet">

	<link href="css/fluidbox.min.css" rel="stylesheet">

	<link href="css/styles.css" rel="stylesheet">

	<link href="css/responsive.css" rel="stylesheet">

</head>

<body>

	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>Tlogosuryo Street Num. 02</h5>
								<h5>Malang, Indonesia</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>+62 813 3216 7238</h5>
								<h6>MON - FRI,9AM - 4PM</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>hello@ammarprojects.com</h5>
								<h6>REPLY IN 24 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->

		</div><!-- container -->
	</header>

	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="asset/me.png" alt=""></div>
						<h2><b>Ammar Muhammad</b></h2>
						<h4 class="font-yellow margin-b-30">Freelance Designer</h4>

						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-dribbble"></i></a></li>
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MY WORK</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
						<a href="#" data-filter=".mobile"><b>MOBILE</b></a>
						<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->

		<div class="portfolioContainer ml-4 mr-4">

			<?php foreach($porto as $row): ?>
			<div class="p-item <?=$row["kategori"]?>">
				<a href="asset/design/<?=$row["gambar"]?>" data-fluidbox>
					<img src="asset/design/<?=$row["gambar"]?>" alt=""></a>
				<p><?=$row["deskripsi"]?></p>
			</div>
			<?php endforeach; ?>
		</div><!-- portfolioContainer -->

	</section><!-- portfolio-section -->


	<footer>
		<p class="copyright mt-4 text-white">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>
				document.write(new Date().getFullYear());
			</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by
			<a href="https://colorlib.com" target="_blank">Colorlib</a>

			<br>Edited by Ammar Projects
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>


	<!-- SCIPTS -->

	<script src="js/jquery-3.2.1.min.js"></script>

	<script src="js/tether.min.js"></script>

	<script src="js/bootstrap.js"></script>

	<script src="js/isotope.pkgd.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/progressbar.min.js"></script>

	<script src="js/jquery.fluidbox.min.js"></script>

	<script src="js/scripts.js"></script>

</body>

</html>