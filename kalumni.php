<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kuesioner Alumni</title>
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
<body class="">

	<!-- Navbar-->

	<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark  flex-row">
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

	<!-- search data mahasiswa -->
	<div class="container">
		<div class="content-center">
			<div class="jumbotron   ml-5 mr-5 mt-5">
			<form id="form" method="POST"  autocomplete="off">
				
				<h2 href="" class="mb-5 text-center">Kuesioner Alumni</h2>

					<div class="row">
						<div class="input-group">
						  <input id="search"  type="text" name="search" value="" class="form-control ml-3 mr-3" placeholder="Masukkan Nama atau NIM" autocomplete="off" >
						</div>
					</div>
					<div class="list-group  content-center" id="show-list" ></div>
	              	<div class="content-center position" id="lanjutkan">
	              		<button type="button" class="btn btn-center btn-primary btn-sm btn-block ">lanjutkan</button>
	              	</div>
	              	<p></p>

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

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="">Apakah anda bekerja saat ini <span class="font-italic ">(Termasuk kerja sambilan dan wirausaha)</span></label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" href="" class="form-check-input" data-toggle="collapse" data-target="#ya" name="pilih">Ya
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" href="" class="form-check-input" data-toggle="collapse" data-target="#tidak" name="pilih">Tidak
			  			</label>
					</div>
				  </div>
				</div>
				<div class="section collapse" id="ya" >

				<hr>

				<div class="row pt-3 " data-toggle="" id="">
				  <div class="form-group col-sm-5 w-25 " id="" >
				  	 <label for="" id="ya" class="" >Nama Perusahaan TempatBekerja/Berwirausaha</label>
				  </div>
				  <div class="col-sm-7 ">
				  	<input type="text" class="form-control rounded-0" id="usr">
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="" style="color: black;">Skala Perusahaan Tempat Bekerja/Berwirausaha</label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="optradio">Lokal/ Wilayah/ Berwirausaha tidak Berizin
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="optradio">Nasional/ Berwirausaha Berizin
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="optradio">Multinasional/ Internasional
			  			</label>
					</div>
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="">Jenis Perusahaan Tempat Bekerja/Berwirausaha</label>
				  </div>
				  <div class="col-sm-7">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Instansi pemerintah (termasuk BUMN)
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Organisasi non-profit/Lembaga Swadaya Masyarakat
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Perusahaan swasta
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Wiraswasta/perusahaan sendiri
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="2">Lainnya
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="text" class="form-check-input" name="2">Lainnya
			  			</label>
					</div>
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="">Level Pekerjaan</label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Owner
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Direktur
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Manager
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Supervisor
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Staff
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="3">Entry
			  			</label>
					</div>
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="" class="">	Kira-kira berapa pendapatan anda setiap bulannya?</label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="5">
							Dari Pekerjaan Utama<br>Rp.<span class="col-2 pl-0"><input type="text" name="" class="col-4 text-left ml-0 mr-0 " placeholder=""></span>(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
			  			</label>
					</div>
					<div class="form-check">
					<label class="form-check-label pt-1">
			    			<input type="radio" class="form-check-input" name="5">
			    			Dari Lembur dan Tips<br>Rp.<span class="col-2 pl-0" ><input type="text" name="" class="col-4 text-left ml-0 mr-0 " ></span>(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
			  			</label>
			  		</div>
			  		<div class="form-check">
					<label class="form-check-label pt-1">
			    			<input type="radio" class="form-check-input" name="5">
			    			Dari Pekerjaan Lainnya<br>Rp.<span class="col-2 pl-0"><input type="text" name="" class="col-4 text-left ml-0 mr-0"></span>(Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)
			  			</label>
			  		</div>
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
				  </div>
				  <div class="col-sm-7">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Sangat Erat
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Erat
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Cukup Erat

			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Kurang Erat
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="7">Tidak Sama Sekali
			  			</label>
					</div>
				  </div>
				</div>

				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="usr" class="">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
				  </div>
				  <div class="col-sm-7">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Setingkat Lebih Tinggi
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Tingkat yang Sama
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Setingkat Lebih Rendah

			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="8">Tidak Perlu Pendidikan Tinggi
			  			</label>
					</div>
				  </div>
				</div>
				</div>

				<hr>
				<div class="section collapse" id="tidak" >
				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="" class="">Bagaimana anda menggambarkan situasi anda saat ini?<span class="font-italic "> (Jawaban bisa lebih dari satu)</span></label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="checkbox" class="form-check-input" value="">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="checkbox" class="form-check-input" value="">Saya menikah
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="checkbox" class="form-check-input" value="">Saya sibuk dengan keluarga dan anak-anak
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="checkbox" class="form-check-input" value="">Saya sekarang sedang mencari pekerjaan
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="checkbox" class="form-check-input" value="">Lainnya 
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="text" class="form-check-input" name="2">Lainnya
			  			</label>
					</div>
				  </div>
				</div>
				</div>
				<hr>

				<div class="row pt-3">
				  <div class="form-group col-sm-5 w-25 ">
				  	 <label for="" class="">Sebutkan sumberdana dalam pembiayaan kuliah?</label>
				  </div>
				  <div class="col-sm-7 ">
				  	<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="">Biaya Sendiri / Keluarga
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="">Direktur
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Manager
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Supervisor
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Staff
			  			</label>
					</div>
					<div class="form-check">
			  			<label class="form-check-label">
			    			<input type="radio" class="form-check-input" name="4">Entry
			  			</label>
					</div>
				  </div>
				</div>

				<hr>

				  <div class="container pt-5">
					<input type="submit" name="submit" class="btn btn-primary" value="Submit"></input>
				  </div>

				</div>
			</form>

		</div>
	</div>

<?php 
//if (isset($_POST[])) {
	# code...


 ?>















<!-- autocomplete script-->
<script type="text/javascript">
     $(document).ready(function(){
                      $("#search").keyup(function(){
                        var searchText = $(this).val();
                        if (searchText!='') {
                        $.ajax({
                          url:'action.php',
                          method:'post',
                          data:{query:searchText},
                          success:function(response){
                            $("#show-list").html(response);
                          }
                        });
                      }
                      else{
                        $("#show-list").html('');
                      }
                      });
                      $(document).on('click', 'a','p', function(){
                        $("#search").val($(this).text());
                        $("#show-list").html('');
                        $("#data").html('');
                      });
                    });
                  </script>

                  <script type="text/javascript">
                    function myFunction(){
                      document.getElementsByID("search").submit()
                    }               
</script>


</body>

</html>