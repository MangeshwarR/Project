<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>bank service</title>
<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container-fluid">
<?php include 'header.php'; 
  
  $conn = mysqli_connect('localhost','root','','image');
  $sql = "SELECT * FROM `images` ORDER BY id DESC";
  $run = mysqli_query($conn, $sql) or die("Query failed");
  if (mysqli_num_rows($run)>0) {
    
     ?>


  <div class="row mt-5">
    <?php
    $count = 0;
    while ($data = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
   <a href="images/<?php echo $data['img'] ?>"><img src="images/<?php echo $data['img'] ?>" alt="" class="img" height="300px" width="100%"></a> 
  </div>
   <?php
 }
    $count = 0;
    while ($data1 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
    <a href="images/<?php echo $data1['img'] ?>"><img src="images/<?php echo $data['img'] ?>" alt="" class="img" height="300px" width="100%"></a> 
  </div>
   <?php
 }
    $count = 0;
    while ($data2 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
   <a href="images/<?php echo $data2['img'] ?>"><img src="images/<?php echo $data['img'] ?>" alt="" class="img" height="300px" width="100%"></a> 
  </div>
   <?php
 }
    $count = 0;
    while ($data3 = mysqli_fetch_assoc($run)) {
      ?>
  <div class="col-md-3 mt-4">
    <a href="images/<?php echo $data3['img'] ?>"><img src="images/<?php echo $data['img'] ?>" alt="" class="img" height="300px" width="100%"></a> 
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