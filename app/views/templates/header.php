<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> <?= $data['judul']; ?> </title>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


	  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body class="">

<!-- Navbar-->	
	<nav class="navbar navbar-fixed-top navbar-expand-sm navbar-dark bg-dark  flex-row">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?= BASEURL; ?>" class=" navabar navbar-brand">Polibatam</a>
			</div>
				<button class="navbar-toggler ml" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			    </button>
			<div class="collapse navbar-collapse" id="navbar">
				<div class="container">
					  <ul class="navbar-nav ml-auto">
					    <li class="nav-item ">
					      <a class="nav-link text-right" href="<?= BASEURL; ?>">Home</a>
					    </li>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="<?= BASEURL; ?>/tracers">Tracer Study</a>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="<?= BASEURL; ?>/kpa">Kuesioner Pengguna Alumni</a>
					    </li>
					    
					    </li>
					    <li class="nav-item">
					      <a class="nav-link text-right" href="<?= BASEURL; ?>/about">About</a>
					    </li>
					  </ul>
				  </div>
			  </div>
		</div>
	</nav>


	