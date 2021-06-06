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

<html>

<head>
  <title>Sign in</title>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     
         body {
        background-color: #FFFCE9;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #ffd000;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #ffd000, #ffc400);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #FCD347;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #FCD347;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
     
    </style>
    
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
      
    <form class="form1" method="POST" >
      <input class="un " type="email" name="email" align="center" placeholder="Email">
        
      <input class="pass" type="password" align="center" placeholder="Password" name="password" >
        
        <input class="submit" align="center" type="submit" name="send" value="Sign in" >
      </form>
      
      
      
      
      <p  class="forgot" align="center">Don't have an account yet? <b> <a href="Sign_Up.php">Sign Up </a> </b> </p>
            
                
    </div>
     <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>
</body>

</html>