<?php 
session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost");
        
        if (isset($_POST['submit'])) {
          
          $name    = $_POST['name'];
          $email   = $_POST['email'];
          $mobile  = $_POST['mobile'];
          $pass    = $_POST['password'];


        $query  =  "insert into regester (name , email , mobile , password) values ('$name' , '$email' , '$mobile' , '$pass')";
        $result =  mysqli_query($conn , $query);

        if ($result) {
          
          header('location:log.php?success');

        }

        else{

          header('location:reg.php?failed');

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
<div class="container col-md-4">
  

      <form action="" method="post" enctype="multipart/form-data">
  
  <h5 class="col-lg-12 card-header info-color white-text text-center py-4 my-2">
    <strong>Registration</strong>
  </h5>


      <div class="form-group col-lg-12 my-4">

        <input type="name" name="name" class="form-control" placeholder="Name" >

      </div>

      <div class="form-group col-lg-12">

            <input type="email" name="email" class="form-control" placeholder="Email" > 
      
      </div>

      <div class="form-group col-lg-12">

            <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" > 
      
      </div>

      <div class="form-group col-lg-12">

            <input type="password" name="password" class="form-control" placeholder="Password" > 
      
      </div>



      <div class="row p-4">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Resgister</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</div>

</body>
</html>