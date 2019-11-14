<?php 
session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost");

 if (isset($_POST['submit'])) {

     $email    =  $_POST['email'];
     $password =  $_POST['password'];

     $query  = "select * from regester where email = '$email' and password = '$password'";
     $result = mysqli_query($conn , $query);
     $num    = mysqli_num_rows($result);

     if ($num == true) {
       
       $_SESSION['email'] = $email['email'];
       $_SESSION['login'] = true;

       header('location:index.php?pass');

     }

     else{

       header('location:log.php?fail');

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
      <form action="" method="post" class="border border-light p-5" >

  <h5 class="col-lg-12 card-header info-color white-text text-center py-4 my-2">
    <strong>Login Form</strong>
  </h5>


      

      <div class="form-group col-lg-12 my-4">

        <input type="email" name="email" class="form-control"  placeholder="Email">
      </div>

      <div class="form-group col-lg-12">

        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>

      <div class="row p-4">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block my-4">Submit</button>
          or <a href="reg.php">Sign Up</a>
        </div>
        <!-- /.col -->
      </div>
    </form>
</div>
</body>
</html>