<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>video</title>
<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container-fluid">
<?php include 'header1.php'; 
  
  $conn = mysqli_connect('localhost','root','','image');
  $sql = "SELECT * FROM `videos` ORDER BY id DESC";
  $run = mysqli_query($conn, $sql) or die("Query failed");
  if (mysqli_num_rows($run)>0) {
    
     ?>


  <div class="row mt-5">
    <?php
    $count = 0;
    while ($data = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
    <video controls width="100%" poster="">
    <source src="video/<?php echo $data['vid'] ?>" type="video/mp4">
    </video>
  </div>
   <?php
 }
    $count = 0;
    while ($data1 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
   <video controls width="100%" poster="">
    <source src="video/<?php echo $data1['vid'] ?>" type="video/mp4">
    </video>
  </div>
   <?php
 }
    $count = 0;
    while ($data2 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
  <video controls width="100%" poster="">
    <source src="video/<?php echo $data2['vid'] ?>" type="video/mp4">
    </video>
  </div>
   <?php
 }
    $count = 0;
    while ($data3 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
    <video controls width="100%" poster="">
    <source src="video/<?php echo $data3['vid'] ?>" type="video/mp4">
    </video>
  </div>
</div>
 

     <?php
    }
  }
 ?>
</div>
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
</body>
</html>