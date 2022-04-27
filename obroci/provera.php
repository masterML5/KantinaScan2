<?php function checkifexist($provera, $checkdatum){
		$con  = mysqli_connect('localhost','root','','kantina');
		
		$checksql = "SELECT * FROM vrsta_jela WHERE ime_jela = '$provera' AND datum = $checkdatum ";
		$query_run = mysqli_query($con, $checksql);
		if(mysqli_num_rows($query_run) > 0){
			echo 'Vec je unet '.$provera.' za danasnji dan';
			return;
		}
		
	 }