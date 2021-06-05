<?php
 include_once 'config.php';

 if(isset($_POST['send'])){
     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $Email=$_POST['Email'];
     $confirm_email=$_POST['confirm_email'];
     $password=$_POST['password'];
     $confirm_password=$_POST['confirm_password'];

     echo "$first_name";

      $sql="INSERT INTO sigin_up(first_name,last_name,Email,confirm_email,paassword,confirm_password)VALUES('$first_name','$last_name','$Email','$confirm_email','$password','$confirm_password') ";
      $result=mysqli_query($connect,$sql);
      if($result){
        header("location: ../index.php" );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/all.css"/>
</head>
<body> 
<div  class="SginUp">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">first Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Confirm Email</label>
            <input type="email" name="confirm_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Email">
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
        </div>
        <center> <input type="submit" class="btn btn-primary" name="send" value="send"></center>
    </form>
</div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>   
</body>
</html>