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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<br><br><br>
<div class="container">

<?php 
    
    if (isset($_GET['id'])) {
      
      $id = $_GET['id'];

      $query  =  "select * from post where id = '$id'";
      $result = mysqli_query($conn , $query);
      while ($record = mysqli_fetch_array($result)) { 
        ?>

    <div>
       
       <h1><a href="detail.php"><?php echo $record['title']; ?></a></h1><hr>
       <p><?php echo $record['description']; ?></p>

    </div>

    <?php  } } ?>

      <h2 style="color:skyblue;">Comments:</h2>


      <?php 
         
          if (isset($_GET['id'])) {

            $cid = $_GET['id'];

            $query = "select * from comment where comm_id = '$cid'";
            $result =  mysqli_query($conn , $query);
            while ($row = mysqli_fetch_array($result)) {  ?>

           <div class="media">
           <div class="media-body">
             
            <?php echo $row['comm_description']; ?>

           </div>

             
           </div>


            <?php }} ?>
<?php 
 if (!isset($_SESSION['email'])) {
die;
}
?>


  <h2>Leave a Comment</h2>

      <form action="" method="post" >
           <?php 
               
               $query = "select * from post";
                         $result= mysqli_query($conn, $query);
                         $rows_result = mysqli_fetch_array($result);
                          
               
            ?>
        <input type="hidden" name="id" value="<?php echo $rows_result['id'] ?>">
      
      <label>Comment Description</label>
      <div class="form-group col-md-4">
        <textarea rows="7" cols="45" name="description" class="form-control">
        	
        </textarea>     
      </div>

      <div class="row p-4">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Add Comment</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

</div>

</body>
</html>


<?php
@session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost"); 

        if (isset($_POST['submit'])) {
          
          $commid = $_POST['id'];
          $commdescription = $_POST['description'];

      $query  =  "insert into comment (comm_id , comm_description) value ('$id' , '$commdescription') ";
        $result =  mysqli_query($conn , $query);

        if ($result) {
           
           header("location:detail.php?id=$id");

        }

        else{

          header('location:detail.php?failed');

        }

        }
        ?>