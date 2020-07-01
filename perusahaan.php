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
<body>
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
					      <a class="nav-link text-right" href="dal.php">Data Awal Lulusan</a>
					    </li>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="tstudy.php">Tracer Study</a>
					    </li>
					    <li class="nav-item">		
					      <a class="nav-link text-right" href="perusahaan.php">Kuesioner Pengguna Alumni</a>
					    </li>
					  </ul>
				  </div>
			  </div>
		</div>
	</nav>

	<div class="container">
		<div class="content-center">
			<div class="jumbotron ml-5 mr-5 mt-5">
			<form id="form" method="POST" class="" autocomplete="off">
				<h2 href="" class="mb-5 text-center ">Kuesioner Pengguna Alumni</h2>
				<hr>
				<div class="content-center">
					<div class="jumbotron alert alert-light">
						<div class="container content-ce">
						<p class="text-danger text-center ml-2 mt-2" >Semua data yang diisi akan dijaga kerahasiaannya
	dan hanya digunakan untuk kepentingan Politeknik Negeri Batam.</p>
						</div>
					</div>
				</div>
				<form action="/action_page.php">
				<h3 href="" class="mt-5 " id="h4">Identitas Koresponden</h3>
				<hr class="col-1 ml-0" id="hr">
				<div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Nama</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0 " placeholder="" id="usr">
				  </div>
				<hr>
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class="" ><span class="text-danger">*</span>Jabatan</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0" placeholder="" id="usr">
				  </div>
				</div>
				<div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Email</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0 " placeholder="" id="usr">
				  </div>
				<hr>
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class="" ><span class="text-danger">*</span>Telp/HP</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0" placeholder="" id="usr">
				  </div>
				</div>
				<div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Nama Alumni</label>
				  </div>
				  <div class="col-sm-3 ">
				  	<input type="text" class="form-control rounded-0 " placeholder="" id="usr">
				  </div>
				<hr>
				</div>
				<hr>
				<h3 href="" class="mt-5 " id="h4">Kuesioner Terhadap Alumni</h3>
				<hr class="col-1 ml-0" id="hr">


				<div class="row pt-2">
					
				</div>
				<div class="row pt-2">
					<div class="form-group col-sm-4 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Apakah Alumni bekerja pada bidang yang sesuai dengan keahliannya?</label>
				  	 </div>
				  	 <div class="form-check col-sm-4 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="ya">ya
			  			</label>
					</div>
					<div class="form-check col-sm-4 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="tidak">tidak
			  			</label>
					</div>
				  
				</div>

				<hr>
				<div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Tingkat Kehadiran Alumni?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="1">Baik Sekali 
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="1">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="1">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="1">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Tinkat Kedisiplinan Alumni?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				   <div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kemampuan menyelesaikan pekerjaan/tugas sesuai dengan target?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				   <div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Tingkat kreatifitas dan kemampuan berinisiatif?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Kurang
			  			</label>
					</div>
				  </div>
				  <div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kemampuan berkomunikasi?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="5">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="5">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="5">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="5">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  <div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kemampuan beradaptasi dengan lingkungan kerja?</label>
				  </div>
				<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="6">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="6">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="6">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="6">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kemampuan bersosialisasi dalam lingkungan kerja?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Sopan santun?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kerapian dalam berbusana?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="9">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="9">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="9">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="9">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Integritas (etika dan moral)?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="10">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="10">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="10">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="10">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Keahlian berdasarkan bidang ilmu (kompetensi utama)?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="11">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="11">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="11">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="11">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Keahlian Bahasa Inggris?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="12">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="12">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="12">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="12">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Penggunaan teknologi informasi?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="13">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="13">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="13">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="13">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Kerja sama team?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="14">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="14">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="14">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="14">Kurang
			  			</label>
					</div>
				  </div>
				  <hr>
				  <div class="row pt-2">
				  	<div class="form-group col-sm-3 w-25 ">
				  	 <label for="usr" class=""><span class="text-danger">*</span>Pengembangan diri?</label>
				 	</div>
					<hr>	
				  	<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="15">Baik Sekali 
			  			</label>
					</div>
					<div class=" form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="15">Baik
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="15">Cukup
			  			</label>
					</div>
					<div class="form-check col-sm-2 pl-5">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="15">Kurang
			  			</label>
					</div>
				  </div>
	 <hr>

	  			<div class="container pt-5 text-right">
					<button type="button" class="btn btn-primary">Submit</button>
				</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>