<?php
 include_once 'config.php';

 if(isset($_POST['send'])){
     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $email=$_POST['email'];
     $password=SHA1($_POST['password']);

     if(empty($first_name)||empty($last_name)||empty($email)||empty($password)){

        echo "<h1>اكتب اي حاجه يستا  </h1>";

     }else{
         $sql1="SELECT email  FROM sigin_up WHERE email='$email'";
         $result=mysqli_query($connect,$sql1);
         $count=mysqli_num_rows($result);
        // عدد النتائج الراجعه
        if($count<1){
        echo "$count";
        $sql="INSERT INTO sigin_up(first_name,last_name,email,paassword)VALUES('$first_name','$last_name','$email','$password')";
        $result=mysqli_query($connect,$sql);
          if($result){
            header("location: sign_in.php" );
        }
        }else{
            echo "<h2 style='color:red;'>Email already exists</h2>";
        }

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
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <center>
        <input type="submit" class="btn btn-primary" name="send" value="Sign Up">
        <!-- <a href="#"><button class="btn btn-primary"> Sign in </button></a> -->
        </scenter>
    </form>
</div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>   
</body>
</html>