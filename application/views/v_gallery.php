<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/aaa.png' ?>">

	<!-- Place aaa.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="aaa.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/dist/css/lightbox.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<style>
	#lol {
		margin-top: 70px;
	}
</style>

<body>

	<div id="fh5co-page">
		<?php $this->load->view('v_header'); ?>



		<div class="container">
			<div class="row"><br />
				<div id="lol">
					<center>
						<h2>Awesome Gallery</h2>
					</center>
					<?php foreach ($data->result() as $row) :	?>
						<div class="col-md-4">
							<a class="example-image-link" href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" data-lightbox="example-2" data-title="<?php echo $row->galeri_judul; ?>"><img class="example-image img-responsive" src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" alt="image-1" /></a>
							<center>
								<h3> <?php echo $row->galeri_judul; ?> </h3>
							</center>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<br />
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<br />
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('v_footer'); ?>
	</div>



	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>

	<script src="<?php echo base_url() . 'theme/dist/js/lightbox-plus-jquery.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easypiechart.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url() . 'theme/js/jquery.stellar.min.js' ?>"></script>
	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>


</body>

</html>