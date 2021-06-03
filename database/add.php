<?php
include_once 'config.php';
if (isset($_POST['send'])) {
  $nameBook=$_POST['name-book'];
  $nameAuthor=$_POST['name-author-book'];
  $price=$_POST['price-book'];
  $picture=$_POST['picture'];

  if(empty($nameBook)||empty($nameAuthor)||empty($price)||empty($picture)){
    echo "<h1 style='color:red; text-align:center;'>Enter The All Values</h1>";
  }
  else{
  $sql="INSERT INTO tablenew(namBook,nameAuthor,price,picturename) VALUES('$nameBook','$nameAuthor','$price','$picture') ";
  $result=mysqli_query($connect,$sql);
  if($result){
    header("location: ../index.php" );
}
  }
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Prudcte</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/all.css"/>
    <style>
      body{
        background-color:#ccc;
      }
      .div1{
        margin:auto;
        max-width: 800px;
        border:1px solid black;
        padding:20px;
        border-radius:0 0 20px 20px;

      }
      div{
        margin-bottom:20px;
      }
      .head{
        width:800px;
        padding: 20px;
        background-color: black;
        color:#fff;
        border-radius:20px 20px 0 0;
        margin-top:30px;
      }
    </style>
  </head>
  <body>
   <center> <div class="head"> <h1>Enter Database The Book </h1></div></center>
   <div class="div1">
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name Book</label>
    <input type="text" name="name-book" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Book">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name Author</label>
    <input type="text" name="name-author-book" class="form-control" id="exampleInputPassword1" placeholder="Name Author">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name="price-book" class="form-control" id="exampleInputPassword1" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">picture</label>
    <input type="file" name="picture" class="form-control" id="exampleInputPassword1" placeholder="picture">
  </div>
  <div>
 <center> <input type="submit" class="btn btn-primary" name="send" value="send"></center>
  </div>
</form>
</div>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>

  </body>
</html>
