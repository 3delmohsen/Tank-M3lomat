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
    <link rel="stylesheet" href="../css/register.css"/>
</head>
<body class="all"> 

<div class="main">
	<div class="top">
    
     <form method="POST">
        <input class="text" type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first Name">
        <input class="text" type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
        <input class="text" type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <input class="text" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                         <br>
                         <input type="submit" name="send" value="Sign Up">
						<br><br>
                        <p align="center" class="p" > already have an account
                            <b> <a class="p" href="sign_in.php"> log in</a></b> 
                        </p>

        
            
        <!-- <a href="#"><button class="btn btn-primary"> Sign in </button></a> -->
        
     </form>
    </div>
</div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>   
</body>
</html>