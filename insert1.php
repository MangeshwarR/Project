<?php 
if (isset($_POST['sub'])) 
	$vname = $_FILES['name']['name'];
	$tmp = $_FILES['name']['tmp_name'];
	move_uploaded_file($tmp, "video/".$vname);
	$conn = mysqli_connect('localhost','root','','image');
	$sql = "INSERT INTO videos (vid) VALUES ('$vname')";
	$run = mysqli_query($conn, $sql) or die("Query failed");
	if ($run == true) {
		 ?>
          <script>
          	alert ("Video Upload Successfully.");
          	window.open("videos.php", "_self");
          </script>
		 <?php
	}else {
		echo "error";
	}

 ?>