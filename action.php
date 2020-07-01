<?php

$conn = new mysqli("localhost","root","","tracerstudy");
		if($conn->connect_error){
			die("failed to connect!!".$conn->connect_error);	
		}
		if(isset($_POST['query'])){
	 	$inpText=$_POST['query'];
	 	$query="SELECT * FROM alumni WHERE nama LIKE '%$inpText%' or email LIKE '%$inpText%'";
	 	$result = $conn->query($query);
	 	if($result->num_rows>0){
	 		while($row=$result->fetch_assoc()){
	 			echo"<a href='#nama' class='list-group-item list-group-item-action border-3'><strong>Nama: </strong>".$row['nama']."<strong> NIM: </strong>".$row['nim']."<strong> Prodi: </strong>".$row['prodi']."</a>";
	 		}
	 	}
	 	if($result->num_rows>0){
	 		while($row=$result->fetch_assoc()){
	 			echo"<p href='#nama' class=''><strong>Nama: </strong>".$row['nama']."<strong> NIM: </strong>".$row['nim']."</p>";
	 		}
	 	}
	 	else{
	 		echo "<p class='list-group-item border-1'>NO Record</P>";
	 	}
	 	
	}


?>
