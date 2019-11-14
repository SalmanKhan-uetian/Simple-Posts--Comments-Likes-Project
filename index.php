<?php 
session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost");
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 <script src="bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>

	<div class="container">
   <a href="logout.php">Logout</a>


     <?php 
        
        $query = "select * from post";

        $result= mysqli_query($conn , $query);

        while ($row = mysqli_fetch_array($result)) {
        	
     ?>
     <div>
     <h1><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h1><hr>
     <p><?php echo $row['description']; ?></p>
  </div>  
      <?php } ?>

      </div>

</body>
</html>