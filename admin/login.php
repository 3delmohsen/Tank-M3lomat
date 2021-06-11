<?php
  include_once "config.php";
  session_start();
  if(isset($_POST['send'])){
    $user_name=$_POST['user_name'];
    $pass= $_POST['pass'];

    $sql="SELECT * from login_admin WHERE user='$user_name' AND pass='$pass'";
    $re=mysqli_query($con,$sql);
    $count=mysqli_num_rows($re);
    $data=array();
    while($row=mysqli_fetch_assoc($re)){
      $data[]=$row;
    }
   
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-12 mx-auto tm-login-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="tm-block-title mb-4">Welcome to Dashboard, Login</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <form method="post" class="tm-login-form">
                <?php
                if(isset($_POST['send'])){
                 if($count>0){
                   $_SESSION['asd']=$data[0]['user'];
                   $_SESSION['userid']=$data[0]['id'];
                  header("location:   index.php" );
                }else{
                  echo "<div style='color:red;background-color: #eef2c4; padding:5px;'>The password or email you entered is incorrect.</div>";
                }
              }
                 ?>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input
                    type="text"
                    class="form-control validate"
                    id="username"
                    value=""
                    name="user_name"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control validate"
                    id="password"
                    value=""
                    name="pass"
                    required
                  />
                </div>
                <div class="form-group mt-4">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                    name="send"
                  >
                    Login
                  </button>
                </div>
                <button class="mt-5 btn btn-primary btn-block text-uppercase">
                  Forgot your password?
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="#" class="tm-footer-link">Tank m3lomat</a>
          </p>
        </div>
      </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
