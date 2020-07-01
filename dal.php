<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tracer Study</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  <style>
	hs{color: black;

	}

	#hr{height:2px;
		border-width:0; 
		width: 1px;
		color:gray;
		background-color:darkorange;
	}
	.jumbotron{
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) ;
	}
	#showlist{
		width: 70%;
	}
	#lanjutkan{
		
	}
	#search{

	}

	.w-25 {
    width: 100% !important;
}
	#form{

    width: 100% !important;
	}

	label{color: black;}
  </style>
</head>
<body class="">



	<!-- Navbar-->	
	<nav class="navbar navbar-fixed-top navbar-expand-sm navbar-dark bg-dark  flex-row">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class=" navabar navbar-brand">Polibatam</a>
			</div>


				<button class="navbar-toggler ml" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
							      <span class="navbar-toggler-icon"></span>
			    </button>


			<div class="collapse navbar-collapse" id="navbar">
				<div class="container">
					  <ul class="navbar-nav ml-auto">
					    <li class="nav-item ">
					      <a class="nav-link text-right" href="index.php">Home</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link text-right" href="tentang.php">Tentang</a>
					    </li>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="kuesioner.php">Tracer Study</a>
					    </li>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="perusahaan.php">Kuesioner Pengguna Alumni</a>
					    </li>
					  </ul>
				  </div>
			  </div>
		</div>
	</nav>
<!-- search data mahasiswa -->
	<div class="container">
		<div class="content-center">
			<div class="jumbotron   ml-5 mr-5 mt-5">
			<form id="form" method="POST"  autocomplete="off">
				
				<h2 href="" class="mb-5 text-center">Data Awal Alumni</h2>

					<div class="row">
						<div class="input-group">
						  <input id="search"  type="text" name="search" value="" class="form-control ml-3 mr-3" placeholder="Masukkan Nama atau NIM" autocomplete="off" >
						</div>
					</div>
					<div class="list-group  content-center" id="show-list" ></div>
	              	<div class="content-center position" id="lanjutkan">
	              		<button type="button" class="btn btn-center btn-primary btn-sm btn-block ">lanjutkan</button>
	              	</div>

	              	<!-- kuesioner data mahasiswa -->
	<!-- kuesioner wajib -->
				<h3 href="" class="mt-5 " id="h4">Identitas Alumni</h3>
				<hr class="col-1 ml-0" id="hr">
				<div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class="">Nomor Telepon/HP</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0 " placeholder="08**********" id="usr">
				  </div>
				<hr>
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class="" >Alamat Email</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0" placeholder="example@contoh.com" id="usr">
				  </div>
				</div>
				<hr>
				<h3 href="" class="mt-5 " id="h4">Tracer Study</h3>
				<hr class="col-1 ml-0" id="hr" >

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <a for="" class="text-right">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</a>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">kira-kira <span><input type="text" name="" class="col-3 text-center ml-0 mr-0" placeholder=""></span>bulan sebelum lulusan ujian
			  			</label>
					</div>
					<div class="form-check">
					<label class="form-check-label pt-1">
			    			<input type="radio" class="form-check-input" name="7">kira-kira <span><input type="text" name="" class="col-3 text-center ml-0 mr-0" placeholder="" ></span>bulan setelah lulusan ujian
			  			</label>
			  		</div>
				  </div>
				</div>







<script src="js/script"></script>
</body>

</html>