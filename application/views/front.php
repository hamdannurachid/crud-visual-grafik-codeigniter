
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Visualisasi Data</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="shortcut icon" href="https://f0.pngfuel.com/png/502/932/green-arrow-graphing-chart-png-clip-art-thumbnail.png">



	 <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<meta name="theme-color" content="#563d7c">


	<style>
		.jumbotron {
			background: linear-gradient(to right,#01579b 0,#318e8e 60%,#6cc976 100%)
		}
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="blog.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?php echo base_url('user') ?>">Visual Data</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('admin/internet') ?>" target="_blank">Admin</a>
					</li>

				</ul>
			</div>
			
		</nav>

		<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-2">
			<div class="col-md-12 px-0">
				<h1 class="display-6">Visualisasi Pengguna Internet Indonesia</h1>
				<!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p> -->
			</div>
		</div>


	</div>

	<main role="main" class="container">
		<?php
	// ambil data dari variabel isi
		if($isi)
		{
			$this->load->view($isi);
		}
		?>

	</main><!-- /.container -->


<!-- Footer -->
<footer class="page-footer font-small" style="background-color: silver">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> Visualisasi Data</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
