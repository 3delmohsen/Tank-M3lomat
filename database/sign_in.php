<?php
 include_once 'config.php';

 if(isset($_POST['send'])){
     $email=$_POST['email'];
     $password=SHA1($_POST['password']);
    if(empty($email)||empty($password)){

    }else{
        $sql="SELECT email,paassword FROM sigin_up WHERE email='$email' AND paassword='$password'";
        $reslt=mysqli_query($connect,$sql);
        // $row=mysqli_fetch_assoc($reslt);تخزين معلومات النتيجه
        $count=mysqli_num_rows($reslt);
        // عدد النتائج الراجعه
        if($count>0){
            header("location: ../index.php" );
        }else{
            echo "<h2 style='color:red;'>The password or email you entered is incorrect.</h2>";
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
    <title>Sign In</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/all.css"/>
    <link rel="stylesheet" href="../css/loginform.css"/>
</head>
<body style="background-color:#FFFAD8;" > 
<div  class="SginUp">
    <form calass="for" method="POST">
            <div class="form-group">
            <label class="down" for="exampleInputEmail1">Email</label>
            <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <center>
        <a href="sign_Up.php"><button class="btn btn-primary"> Sign Up </button></a>
        <input type="submit" class="btn btn-primary" name="send" value="Sign in">
        
        </center>
    </form>
</div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script> 
   
</body>
</html>