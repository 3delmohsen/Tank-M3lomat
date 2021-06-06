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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <?php include_once "nvbar.php" ?>
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="first_name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="last_name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password"  name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="send" id="signup" style="background-color: #f26522 !important;" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="imge/signup-image.jpg" alt="sing up image"></figure>
                    <a href="sign_in.php" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>