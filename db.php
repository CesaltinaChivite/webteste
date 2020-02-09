<?php 


	$conn = mysqli_connect('localhost','root','', 'chat') or die(mysqli_connect_error());
	function DBClose($conn){
		mysqli_close($conn) or die (mysqli_error($conn));
	}

 ?>