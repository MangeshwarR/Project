<?php 
if (isset($_POST['sub'])) 
	$imagename = $_FILES['img']['name'];
	$tempname = $_FILES['img']['tmp_name'];
	move_uploaded_file($tempname,"images/$imagename");
	$conn = mysqli_connect('localhost','root','','image');
	$sql = "INSERT INTO `images`(`img`) VALUES ('$imagename')";
	$run = mysqli_query($conn, $sql) or die("Query failed");
	if ($run == true) {
		 ?>
          <script>
          	alert ("Image Upload Successfully.");
          	window.open("index.php", "_self");
          </script>
		 <?php
	}else {
		echo "error";
	}

 ?>