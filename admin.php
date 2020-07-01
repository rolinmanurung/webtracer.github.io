<?php


	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];


		$result = mysqli_query($conn, "SELECT * FROM admin WHERE
			username = '$username'");



		//cek username
		if ( mysqli_num_rows($result) === 1){


			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])){

				header("location: index.php");
				exit;
			}


		}
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>





<body class="bg-dark">
<div class="container " style="padding: 20% 25% 20% 20%;">
	<div class="content-center">
		<div class="jumbotron" style="" style="">
			<h5 class="text-center pt-2">Login Backoffice</h5>
		  	<form class="" style="" action="" method="post">
			  <div class="row">
			    <div class="col-12">
			      <input type="text" class="form-control" id="username" placeholder="Username" name="username" autocomplete="off">
			  </div>
			  <div class="col-12">
			      <input type="password" class="form-control" placeholder="Password" name="password">
			    </div>
			  </div>
			  <div class="text-center pt-4">
			  		<button type="submit" name="login" class="btn btn-dark" autocomplete="off">Login</button>
			  </div>
			</form>
		  </div>
	</div>
</div>

</body>
</html>
