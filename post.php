<?php 
session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost");

        if (isset($_POST['submit'])) {
           
           $title       = $_POST['title'];
           $description = $_POST['description'];

           $query  =  "insert into post (title , description) value ('$title' , '$description')";
           $result = mysqli_query($conn , $query);

           if ($result) {
             
             header('location:post.php?true');

           }

           else{

            header('location:post.php?false');

           }


       }


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<br><br><br>
<div class="container">
  <h2>Add Post</h2>

      <form action="" method="post" >
      <div class="form-group col-md-4">

        <input type="title" name="title" class="form-control" placeholder="Post">
      </div>

      <div class="form-group col-md-4">
        <textarea rows="7" cols="45" name="description" class="form-control">
        	
        </textarea>     
      </div>

      <div class="row">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Add Post</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</div>

</body>
</html>